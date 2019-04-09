<?php
	class Pages extends Controller {
		public function __construct() {
			
		}

		public function index() {
			$data = [
				'title'       => 'CMS',
				'description' => 'Jednostavna Admin stranica izrađena pomoću PHP Framework-a'
			];

			$this->view('pages/index', $data);
		}

		public function about() {
			$data = [
				'title'       => 'About Us',
				'description' => 'CMS Projekat'
			];
			$this->view('pages/about', $data);
		}
		
		
		
	}

?>