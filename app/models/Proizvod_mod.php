<?php
	class Proizvod {
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
		
		public function sviProizvodi() {
			$this->db->query('SELECT * FROM proizvodi');
			$results = $this->db->resultSet();
			return $results;
		}

		public function selektujProizvod($id) {
			$this->db->query('SELECT * FROM proizvodi WHERE id = :id');
			$this->db->bind(':id', $id);

			$row = $this->db->single();
			return $row;
		}

		public function dodajProizvod($data) {
			$this->db->query('INSERT INTO proizvodi (
																								naziv, name, opis, description, uvodni_tekst, introductory_text, tekst_proizvoda, product_text, cover_fotografija, uvodna_fotografija, alt_tag, alt_tag_eng
																							) VALUES
																							(
																								:naziv, :name, :opis, :description, :uvodni_tekst, :introductory_text, :tekst_proizvoda, :product_text, :cover_fotografija, :uvodna_fotografija, :alt_tag, :alt_tag_eng
																							)'
											);
			$this->db->bind(':naziv',              $data['naziv']);
			$this->db->bind(':name',               $data['name']);
			$this->db->bind(':opis',               $data['opis']);
			$this->db->bind(':description',        $data['description']);
			$this->db->bind(':uvodni_tekst',       $data['uvodni_tekst']);
			$this->db->bind(':introductory_text',  $data['introductory_text']);
			$this->db->bind(':tekst_proizvoda',    $data['tekst_proizvoda']);
			$this->db->bind(':product_text',       $data['product_text']);
			$this->db->bind(':cover_fotografija',  $data['cover_fotografija']);
			$this->db->bind(':uvodna_fotografija', $data['uvodna_fotografija']);
			$this->db->bind(':alt_tag',            $data['alt_tag']);
			$this->db->bind(':alt_tag_eng',        $data['alt_tag_eng']);
			
			if($this->db->execute()) {
				return true;
			} else {
				return false;
			}
		}
		
		public function izmijeniProizvod($id, $data) {
			$this->db->query('UPDATE proizvodi SET naziv              = :naziv,
																						 name               = :name,
																						 opis               = :opis,
																						 description        = :description,
																						 uvodni_tekst       = :uvodni_tekst,
																						 introductory_text  = :introductory_text,
																						 tekst_proizvoda    = :tekst_proizvoda,
																						 product_text       = :product_text,
																						 cover_fotografija  = :cover_fotografija,
																						 cover_photo        = :cover_photo,
																						 uvodna_fotografija = :uvodna_fotografija,
																						 introductory_photo = :introductory_photo,
																						 alt_tag            = :alt_tag,
																						 alt_tag_eng        = :alt_tag_eng,
																						 status             = :status
																				 WHERE id = :id'
											);
			$this->db->bind(':naziv',              $data['naziv']);
			$this->db->bind(':name',               $data['name']);
			$this->db->bind(':opis',               $data['opis']);
			$this->db->bind(':description',        $data['description']);
			$this->db->bind(':uvodni_tekst',       $data['uvodni_tekst']);
			$this->db->bind(':introductory_text',  $data['introductory_text']);
			$this->db->bind(':tekst_proizvoda',    $data['tekst_proizvoda']);
			$this->db->bind(':product_text',       $data['product_text']);
			$this->db->bind(':cover_fotografija',  $data['cover_fotografija']);
			$this->db->bind(':cover_photo',        $data['cover_photo']);
			$this->db->bind(':uvodna_fotografija', $data['uvodna_fotografija']);
			$this->db->bind(':introductory_photo', $data['introductory_photo']);
			$this->db->bind(':alt_tag',            $data['alt_tag']);
			$this->db->bind(':alt_tag_eng',        $data['alt_tag_eng']);
			$this->db->bind(':status',             $data['status']);
			$this->db->bind(':id',                 $id);

			if($this->db->execute()) {
				return true;
			} else {
				return false;
			}
			
		}
		
		public function izbrisiProizvod($id) {
			$this->db->query('DELETE FROM proizvodi WHERE id = :id');
			
			$this->db->bind(':id', $id);
			
			if($this->db->execute()) {
				return true;
			} else {
				return false;
			}
		}
		
		public function aktivirajDeaktiviraj($id, $status) {
			$this->db->query('UPDATE proizvodi SET status = :status WHERE id = :id');
			
			$this->db->bind(':status', $status);
			$this->db->bind(':id', $id);
			
			if($this->db->execute()) {
				return true;
			} else {
				return false;
			}

		}
	}