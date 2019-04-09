<?php
	class Profil extends Controller {
		private $data = [];

		public function __construct() {
			if(!isLoggedIn()) {
				redirect('');
			}
			$this->profilModel = $this->model('Profilm');
			$this->userModel   = $this->model('User');

			$logovani_korisnik = $this->userModel->getUserById($_SESSION['user_id']);
			$datum = new DateTime($logovani_korisnik->created_at);
			$logovani_korisnik->created_at = $datum->format('d M Y');

			$this->data = [
				'sadrzaj'            => '/views/profil/sadrzaj.php',
				'logovani_korisnik'  => $logovani_korisnik,
				'user_image'         => $logovani_korisnik->image,
				'ime_korisnika'      => $logovani_korisnik->name,
				'datum_registracije' => $logovani_korisnik->created_at
			];
		}
		
		public function index() {
			$this->view('index', $this->data);
		}

		public function promijeni() {
			$this->data['promijeni_lozinku'] = izaberiModal('izmjena', lcfirst(__CLASS__));

			$this->view('index', $this->data);
		}


	}
