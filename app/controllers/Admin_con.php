<?php
	class Admin extends Controller {

		public function __construct() {
			if(!isLoggedIn()) {
				redirect('');
			}
			$this->adminModel = $this->model('Adminm');
			$this->userModel  = $this->model('User');
		}

		public function index() {
			$logovani_korisnik = $this->userModel->getUserById($_SESSION['user_id']);
			$sadrzaj   = '/views/admin/sadrzaj.php';
			
			$datum = new DateTime($logovani_korisnik->created_at);
			$logovani_korisnik->created_at = $datum->format('d M Y');

			$data = [
				'sadrzaj'            => $sadrzaj,
				'user_image'         => $logovani_korisnik->image,
				'ime_korisnika'      => $logovani_korisnik->name,
				'datum_registracije' => $logovani_korisnik->created_at
			];

			$this->view('index', $data);
		}
		

	}