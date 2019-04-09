<?php
	class Karijera extends Controller {
		private $data = [];

		public function __construct() {
			if(!isLoggedIn()) {
				redirect('');
			}
			$this->karijeraModel = $this->model('Karijeram');
			$this->userModel     = $this->model('User');

			$svi_konkursi = $this->karijeraModel->sviKonkursi();
			$trenutno_vrijeme = strtotime(date("d/m/Y"));
			$status_konkursa = array();
			foreach($svi_konkursi as $konkurs) {
				$datum_pocetak = new DateTime($konkurs->pocetak_konkursa);
				$datum_kraj    = new DateTime($konkurs->kraj_konkursa);
				$konkurs->pocetak_konkursa = $datum_pocetak->format("d M Y");
				$konkurs->kraj_konkursa    = $datum_kraj->format("d M Y");
				$status_konkursa["$konkurs->id"] = (strtotime(date('Y-m-d')) - strtotime($konkurs->kraj_konkursa) > 0) ? 'Završen' : 'U toku';
			}

			$logovani_korisnik = $this->userModel->getUserById($_SESSION['user_id']);
			$datum = new DateTime($logovani_korisnik->created_at);
			$logovani_korisnik->created_at = $datum->format('d M Y');

			$this->data = [
				'sadrzaj'            => '/views/karijera/sadrzaj.php',
				'svi_konkursi'       => $svi_konkursi,
				'status_konkursa'    => $status_konkursa,
				'user_image'         => $logovani_korisnik->image,
				'ime_korisnika'      => $logovani_korisnik->name,
				'datum_registracije' => $logovani_korisnik->created_at,
				'trenutno_vrijeme'   => $trenutno_vrijeme
			];
		}
		
		public function index() {
			$this->view('index', $this->data);
		}

		public function selektuj($id, $param = null) {
			$selektovan_konkurs = $this->karijeraModel->selektujKonkurs($id);
			$this->data['selektovan_konkurs'] = $selektovan_konkurs;
			$this->data['modal_potvrda']      = izaberiModal($param, lcfirst(__CLASS__));
			$this->data['izmijeni_id']        = $id;
			
			$this->view('index', $this->data);
		}
		
		public function dodaj() {
			
			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				
				$form_data['naslov']                = trim($_POST['naslov']);
				$form_data['pocetak_konkursa']      = trim($_POST['pocetak_konkursa']);
				$form_data['kraj_konkursa']         = trim($_POST['kraj_konkursa']);
				$form_data['radno_mjesto']          = trim($_POST['radno_mjesto']);
				$form_data['cover_fotografija']     = trim($_FILES['cover_fotografija']['name']);
				$form_data['cover_fotografija_tmp'] = trim($_FILES['cover_fotografija']['tmp_name']);
				$form_data['title']                 = trim($_POST['title']);
				$form_data['work_position']         = trim($_POST['work_position']);
				$form_data['cover_photo']           = trim($_FILES['cover_photo']['name']);
				$form_data['cover_photo_tmp']       = trim($_FILES['cover_photo']['tmp_name']);
				$form_data['status']                = 'neaktivan';
				
				move_uploaded_file($form_data['cover_fotografija_tmp'], dirname(APPROOT) . '/public/images/' . $form_data['cover_fotografija']);
				move_uploaded_file($form_data['cover_photo_tmp'], dirname(APPROOT) . '/public/images/' . $form_data['cover_photo']);

				if($this->karijeraModel->dodajKonkurs($form_data)) {

					$this->data['modal_success'] = modalUspjeha('dodaj_konkurs', lcfirst(__CLASS__));

					$this->view('index', $this->data);
				} else {
					die('Došlo je do greške');
				}
			} else {
				
			}
		}

		public function izmijeni($id) {

			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
								
				$this->data['naslov']                = trim($_POST['naslov']);
				$this->data['pocetak_konkursa']      = trim($_POST['pocetak_konkursa']);
				$this->data['kraj_konkursa']         = trim($_POST['kraj_konkursa']);
				$this->data['radno_mjesto']          = trim($_POST['radno_mjesto']);
				$this->data['cover_fotografija']     = trim($_FILES['cover_fotografija']['name']);
				$this->data['cover_fotografija_tmp'] = trim($_FILES['cover_fotografija']['tmp_name']);
				$this->data['title']                 = trim($_POST['title']);
				$this->data['work_position']         = trim($_POST['work_position']);
				$this->data['cover_photo']           = trim($_FILES['cover_photo']['name']);
				$this->data['cover_photo_tmp']       = trim($_FILES['cover_photo']['tmp_name']);
				$this->data['status']                = 'neaktivan';
				
				move_uploaded_file($this->data['cover_fotografija_tmp'], dirname(APPROOT) . '/public/images/' . $this->data['cover_fotografija']);
				move_uploaded_file($this->data['cover_photo_tmp'], dirname(APPROOT) . '/public/images/' . $this->data['cover_photo']);

				if($this->karijeraModel->izmijeniKonkurs($id, $this->data)) {
					$this->data['modal_success'] = modalUspjeha('izmijeni_konkurs', lcfirst(__CLASS__));

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
				if($this->karijeraModel->izbrisiKonkurs($id)) {
					$this->data['modal_success'] = modalUspjeha('izbrisi_konkurs', lcfirst(__CLASS__));
					
					$this->view('index', $this->data);
				} else {
					die('Došlo je do greške.');
				}
		}

		public function deaktiviraj($id) {
			$konkurs = $this->karijeraModel->selektujKonkurs($id);
			if($konkurs->status == 'aktivan') {
				if($this->karijeraModel->aktivirajDeaktiviraj($id, 'neaktivan')) {
					redirect('karijera');
				} else {
					die('Došlo je do greške.');
				}
			} else {
				if($this->karijeraModel->aktivirajDeaktiviraj($id, 'aktivan')) {
					redirect('karijera');
				} else {
					die('Došlo je do greške.');
				}
			}
			
		}
		
	}
