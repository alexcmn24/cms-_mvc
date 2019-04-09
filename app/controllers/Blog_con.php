<?php
	class Blog extends Controller {
		private $data = [];

		public function __construct() {
			if(!isLoggedIn()) {
				redirect('');
			}
			$this->blogModel = $this->model('Blogm');
			$this->userModel = $this->model('User');

			$stranica       = isset($stranica) ? $stranica : 1;
			$blogova_po_str = 10;
			$stranica_start = ($stranica == "" || $stranica == 1) ? 0 : ($stranica * $blogova_po_str) - $blogova_po_str;
			$broj_blogova   = $this->blogModel->brojBlogova();
      $broj_stranica  = ceil($broj_blogova / $blogova_po_str);

      $svi_blogovi = $this->blogModel->sviBlogovi($stranica_start, $blogova_po_str);
			foreach($svi_blogovi as $blog) {
				$datum = new DateTime($blog->vrijeme);
				$blog->vrijeme = $datum->format("d M Y");
			}

			$logovani_korisnik = $this->userModel->getUserById($_SESSION['user_id']);
			$datum = new DateTime($logovani_korisnik->created_at);
			$logovani_korisnik->created_at = $datum->format('d M Y');

			$this->data = [
				'sadrzaj'            => '/views/blogovi/sadrzaj.php',
				'svi_blogovi'        => $svi_blogovi,
				'broj_blogova'       => $broj_blogova,
				'blogova_po_str'     => $blogova_po_str,
				'broj_stranica'      => $broj_stranica,
				'stranica'           => $stranica,
				'stranica_start'     => $stranica_start,
				'user_image'         => $logovani_korisnik->image,
				'ime_korisnika'      => $logovani_korisnik->name,
				'datum_registracije' => $logovani_korisnik->created_at
			];
		}
		
		public function index() {
			$this->view('index', $this->data);
		}

		public function stranica($str) {
			$blogova_po_str = 10;
			$stranica_start = (int)$str * $blogova_po_str - $blogova_po_str;
			$broj_blogova   = $this->blogModel->brojBlogova();
      $broj_stranica  = ceil($broj_blogova / $blogova_po_str);
      $svi_blogovi    = $this->blogModel->sviBlogovi($stranica_start, $blogova_po_str);
      
			$_SESSION['stranica']       = $str;
			$_SESSION['stranica_start'] = $stranica_start;
			$_SESSION['broj_stranica']  = $broj_stranica;
			$_SESSION['svi_blogovi']    = $svi_blogovi;
			redirect('blog');
		}

		public function selektuj($id, $param = null) {
			$selektovan_blog = $this->blogModel->selektujBlog($id);
			$this->data['selektovan_blog'] = $selektovan_blog;
			$this->data['modal_potvrda']   = izaberiModal($param, lcfirst(__CLASS__));
			$this->data['izmijeni_id']     = $id;
			
			$this->view('index', $this->data);
		}
		
		public function dodaj() {
			
			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				
				$form_data['naslov']                = trim($_POST['naslov']);
				$form_data['title']                 = trim($_POST['title']);
				$form_data['ime_i_prezime']         = trim($_POST['ime_i_prezime']);
				$form_data['full_name']             = trim($_POST['full_name']);
				$form_data['vrijeme']               = trim($_POST['vrijeme']);
				$form_data['uvodni_tekst']          = trim($_POST['uvodni_tekst']);
				$form_data['introductory_text']     = trim($_POST['introductory_text']);
				$form_data['glavni_tekst']          = trim($_POST['glavni_tekst']);
				$form_data['main_text']             = trim($_POST['main_text']);
				$form_data['cover_fotografija']     = trim($_FILES['cover_fotografija']['name']);
				$form_data['cover_fotografija_tmp'] = trim($_FILES['cover_fotografija']['tmp_name']);
				$form_data['alt_tag']               = trim($_POST['alt_tag']);
				$form_data['alt_tag_eng']           = trim($_POST['alt_tag_eng']);
				$form_data['tagovi']                = trim($_POST['tagovi']);
				$form_data['tags']                  = trim($_POST['tags']);
				
				move_uploaded_file($form_data['cover_fotografija_tmp'], dirname(APPROOT) . '/public/images/' . $form_data['cover_fotografija']);

				if($this->blogModel->dodajBlog($form_data)) {

					$this->data['modal_success'] = modalUspjeha('dodaj_blog', lcfirst(__CLASS__));

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
				
				if($this->blogModel->izmijeniProizvod($id, $this->data)) {
					
					$this->data['modal_success'] = modalUspjeha(__FUNCTION__);
																		
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
				if($this->blogModel->izbrisiBlog($id)) {
					$this->data['modal_success'] = modalUspjeha('izbrisi_blog', lcfirst(__CLASS__));
					
					$this->view('index', $this->data);
				} else {
					die('Došlo je do greške.');
				}
		}

		public function deaktiviraj($id) {
			$blog = $this->blogModel->selektujBlog($id);
			if($blog->status == 'aktivan') {
				if($this->blogModel->aktivirajDeaktiviraj($id, 'neaktivan')) {
					redirect('blog');
				} else {
					die('Došlo je do greške.');
				}
			} else {
				if($this->blogModel->aktivirajDeaktiviraj($id, 'aktivan')) {
					redirect('blog');
				} else {
					die('Došlo je do greške.');
				}
			}
			
		}
		
	}
