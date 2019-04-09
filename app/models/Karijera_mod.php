<?php
	class Karijeram {
		private $db;

		public function __construct() {
			$this->db = new Database();
		}

		public function getLoggedInUserImage($id) {
			$this->db->query('SELECT * FROM users WHERE id = :id');
			
			$this->db->bind(':id', $id);
			
			$row = $this->db->single();
			return $row->image;
		}

		public function sviKonkursi() {
			$this->db->query('SELECT * FROM konkursi ORDER BY kraj_konkursa DESC');

			$results = $this->db->resultSet();
			return $results;
		}

		public function selektujKonkurs($id) {
			$this->db->query('SELECT * FROM konkursi WHERE id = :id');
			$this->db->bind(':id', $id);

			$row = $this->db->single();
			return $row;
		}

		public function dodajKonkurs($data) {
			$this->db->query('INSERT INTO konkursi (
																								naslov, pocetak_konkursa, kraj_konkursa, radno_mjesto, cover_fotografija, title, work_position, cover_photo, status
																							) VALUES
																							(
																								:naslov, :pocetak_konkursa, :kraj_konkursa, :radno_mjesto, :cover_fotografija, :title, :work_position, :cover_photo, :status
																							)'
											);
			$this->db->bind(':naslov',            $data['naslov']);
			$this->db->bind(':pocetak_konkursa',  $data['pocetak_konkursa']);
			$this->db->bind(':kraj_konkursa',     $data['kraj_konkursa']);
			$this->db->bind(':radno_mjesto',      $data['radno_mjesto']);
			$this->db->bind(':cover_fotografija', $data['cover_fotografija']);
			$this->db->bind(':title',             $data['title']);
			$this->db->bind(':work_position',     $data['work_position']);
			$this->db->bind(':cover_photo',       $data['cover_photo']);
			$this->db->bind(':status',            $data['status']);

			if($this->db->execute()) {
				return true;
			} else {
				return false;
			}
		}

		public function izmijeniKonkurs($id, $data) {
			$this->db->query('UPDATE konkursi SET naslov            = :naslov,
												pocetak_konkursa  = :pocetak_konkursa,
												kraj_konkursa     = :kraj_konkursa,
												radno_mjesto      = :radno_mjesto,
												cover_fotografija = :cover_fotografija,
												title             = :title,
												work_position     = :work_position,
												cover_photo       = :cover_photo
										WHERE id = :id'
											);
			
			$this->db->bind(':naslov',            $data['naslov']);
			$this->db->bind(':pocetak_konkursa',  $data['pocetak_konkursa']);
			$this->db->bind(':kraj_konkursa',     $data['kraj_konkursa']);
			$this->db->bind(':radno_mjesto',      $data['radno_mjesto']);
			$this->db->bind(':cover_fotografija', $data['cover_fotografija']);
			$this->db->bind(':title',             $data['title']);
			$this->db->bind(':work_position',     $data['work_position']);
			$this->db->bind(':cover_photo',       $data['cover_photo']);
			$this->db->bind(':id',                $id);

			if($this->db->execute()) {
				return true;
			} else {
				return false;
			}
			
		}
		
		public function izbrisiKonkurs($id) {
			$this->db->query('DELETE FROM konkursi WHERE id = :id');
			
			$this->db->bind(':id', $id);
			
			if($this->db->execute()) {
				return true;
			} else {
				return false;
			}
		}
		
		public function aktivirajDeaktiviraj($id, $status) {
			$this->db->query('UPDATE konkursi SET status = :status WHERE id = :id');
			
			$this->db->bind(':status', $status);
			$this->db->bind(':id', $id);
			
			return ($this->db->execute()) ? true : false;
		}

	}