<?php
	class Proizvodi extends Controller {
		private $data = [];

		public function __construct() {
			if(!isLoggedIn()) {
				redirect('');
			}
			$this->proizvodModel = $this->model('Proizvod');
			$this->userModel     = $this->model('User');

			$svi_proizvodi     = $this->proizvodModel->sviProizvodi();
			foreach($svi_proizvodi as $proizvod) {
				$datum = new DateTime($proizvod->datum_unosa);
				$proizvod->datum_unosa = $datum->format("d M Y");
			}

			$logovani_korisnik = $this->userModel->getUserById($_SESSION['user_id']);
			$datum = new DateTime($logovani_korisnik->created_at);
			$logovani_korisnik->created_at = $datum->format('d M Y');

			$this->data = [
				'sadrzaj'            => '/views/proizvodi/sadrzaj.php',
				'svi_proizvodi'      => $svi_proizvodi,
				'user_image'         => $logovani_korisnik->image,
				'ime_korisnika'      => $logovani_korisnik->name,
				'datum_registracije' => $logovani_korisnik->created_at
			];
		}
		
		public function index() {
			$this->view('index', $this->data);
		}

		public function selektuj($id, $param = null) {
			$selektovan_proizvod = $this->proizvodModel->selektujProizvod($id);
			$this->data['selektovan_proizvod'] = $selektovan_proizvod;
			$this->data['modal_potvrda'] = izaberiModal($param, lcfirst(__CLASS__));
			$this->data['izmijeni_id'] = $id;

			$this->view('index', $this->data);
		}
		
		public function dodaj() {
			$proizvodi = $this->proizvodModel->sviProizvodi();
			
			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				
				$form_data['naziv']                  = trim($_POST['naziv']);
				$form_data['name']                   = trim($_POST['name']);
				$form_data['opis']                   = trim($_POST['opis']);
				$form_data['description']            = trim($_POST['description']);
				$form_data['uvodni_tekst']           = trim($_POST['uvodni_tekst']);
				$form_data['introductory_text']      = trim($_POST['introductory_text']);
				$form_data['tekst_proizvoda']        = trim($_POST['tekst_proizvoda']);
				$form_data['product_text']           = trim($_POST['product_text']);
				$form_data['cover_fotografija']      = trim($_FILES['cover_fotografija']['name']);
				$form_data['cover_fotografija_tmp']  = trim($_FILES['cover_fotografija']['tmp_name']);
				$form_data['uvodna_fotografija']     = trim($_FILES['uvodna_fotografija']['name']);
				$form_data['uvodna_fotografija_tmp'] = trim($_FILES['uvodna_fotografija']['tmp_name']);
				$form_data['alt_tag']                = trim($_POST['alt_tag']);
				$form_data['alt_tag_eng']            = trim($_POST['alt_tag_eng']);
				$form_data['status']                 = 'neaktivan';

				move_uploaded_file($form_data['cover_fotografija_tmp'], dirname(APPROOT) . '/public/images/' . $form_data['cover_fotografija']);
				move_uploaded_file($form_data['uvodna_fotografija_tmp'], dirname(APPROOT) . '/public/images/' . $form_data['uvodna_fotografija']);

				if($this->proizvodModel->dodajProizvod($form_data)) {

					$this->data['modal_success'] = modalUspjeha('dodaj_proizvod', lcfirst(__CLASS__));

					$this->view('index', $this->data);
				} else {
					die('Došlo je do greške');
				}
			}
		}
		
		public function izmijeni($id) {
			
			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				
				$this->data['naziv']                  = trim($_POST['naziv']);
				$this->data['name']                   = trim($_POST['name']);
				$this->data['opis']                   = trim($_POST['opis']);
				$this->data['description']            = trim($_POST['description']);
				$this->data['uvodni_tekst']           = trim($_POST['uvodni_tekst']);
				$this->data['introductory_text']      = trim($_POST['introductory_text']);
				$this->data['tekst_proizvoda']        = trim($_POST['tekst_proizvoda']);
				$this->data['product_text']           = trim($_POST['product_text']);
				$this->data['cover_fotografija']      = trim($_FILES['cover_fotografija']['name']);
				$this->data['cover_fotografija_tmp']  = trim($_FILES['cover_fotografija']['tmp_name']);
				$this->data['cover_photo']            = trim($_FILES['cover_photo']['name']);
				$this->data['cover_photo_tmp']        = trim($_FILES['cover_photo']['tmp_name']);
				$this->data['uvodna_fotografija']     = trim($_FILES['uvodna_fotografija']['name']);
				$this->data['uvodna_fotografija_tmp'] = trim($_FILES['uvodna_fotografija']['tmp_name']);
				$this->data['introductory_photo']     = trim($_FILES['introductory_photo']['name']);
				$this->data['introductory_photo_tmp'] = trim($_FILES['introductory_photo']['tmp_name']);
				$this->data['alt_tag']                = trim($_POST['alt_tag']);
				$this->data['alt_tag_eng']            = trim($_POST['alt_tag_eng']);
				$this->data['status']                 = 'neaktivan';

				move_uploaded_file($this->data['cover_fotografija_tmp'],  dirname(APPROOT) . '/public/images/' . $this->data['cover_fotografija']);
				move_uploaded_file($this->data['cover_photo_tmp'],        dirname(APPROOT) . '/public/images/' . $this->data['cover_photo']);
				move_uploaded_file($this->data['uvodna_fotografija_tmp'], dirname(APPROOT) . '/public/images/' . $this->data['uvodna_fotografija']);
				move_uploaded_file($this->data['introductory_photo_tmp'], dirname(APPROOT) . '/public/images/' . $this->data['introductory_photo']);
				
				if($this->proizvodModel->izmijeniProizvod($id, $this->data)) {
					
					$this->data['modal_success'] = modalUspjeha('izmijeni_proizvod', lcfirst(__CLASS__));
																		
					$this->view('index', $this->data);
				}
			} else {
				
			}
		}

		public function neodustaj($param) {
			$this->data['modal_potvrda'] = izaberiModal($param, lcfirst(__CLASS__));			
			$this->view('index', $this->data);
		}
	
		public function izbrisi($id) {
				if($this->proizvodModel->izbrisiProizvod($id)) {
					$this->data['modal_success'] = modalUspjeha('izbrisi_proizvod', lcfirst(__CLASS__));
					$this->view('index', $this->data);
				
				} else {
					die('Došlo je do greške.');
				}
		}

		public function deaktiviraj($id) {
			$proizvod = $this->proizvodModel->selektujProizvod($id);
			if($proizvod->status == 'aktivan') {
				if($this->proizvodModel->aktivirajDeaktiviraj($id, 'neaktivan')) {
					redirect('proizvodi');
				} else {
					die('Došlo je do greške.');
				}
			} else {
				if($this->proizvodModel->aktivirajDeaktiviraj($id, 'aktivan')) {
					redirect('proizvodi');
				} else {
					die('Došlo je do greške.');
				}
			}
			
		}

	}
