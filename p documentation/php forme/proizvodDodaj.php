<?php
	$conn = mysqli_connect('localhost', 'root', '', 'cms');
	
	$naziv_dodaj             = $_POST['naziv_dodaj'];
	$name_dodaj              = $_POST['name_dodaj'];
	$opis_dodaj              = $_POST['opis_dodaj'];
	$description_dodaj       = $_POST['description_dodaj'];
	$uvodni_tekst_dodaj      = $_POST['uvodni_tekst_dodaj'];
	$introductory_text_dodaj = $_POST['introductory_text_dodaj'];
	$tekst_proizvoda_dodaj   = $_POST['tekst_proizvoda_dodaj'];
	$product_text_dodaj      = $_POST['product_text_dodaj'];
	$alt_tag_dodaj           = $_POST['alt_tag_dodaj'];
	$alt_tag_eng_dodaj       = $_POST['alt_tag_eng_dodaj'];
	
	$uspjesnost = array();

	$query = "INSERT INTO proizvodi (naziv, name, opis, description, uvodni_tekst, introductory_text, tekst_proizvoda, product_text, alt_tag, alt_tag_eng, status) VALUES ('$naziv_dodaj', '$name_dodaj', '$opis_dodaj', '$description_dodaj', '$uvodni_tekst_dodaj', '$introductory_text_dodaj', '$tekst_proizvoda_dodaj', '$product_text_dodaj', '$alt_tag_dodaj', '$alt_tag_eng_dodaj', 'nekativan')";

	$uspjesnost[] = mysqli_query($conn, $query) ? true : false;

	$query = "SET @id_proizvoda = LAST_INSERT_ID()";
	$uspjesnost[] = mysqli_query($conn, $query) ? true : false;
	
	if(!empty($_FILES['cover_fotografija_dodaj']['name'])) {
		$cover_foto_tmp  = $_FILES['cover_fotografija_dodaj']['tmp_name'];
		$cover_foto_name = $_FILES['cover_fotografija_dodaj']['name'];
		if(move_uploaded_file($cover_foto_tmp, '../images/' . $cover_foto_name)) {
			$query = "UPDATE proizvodi SET cover_fotografija = '$cover_foto_name' WHERE id = @id_proizvoda";

			$uspjesnost[] = mysqli_query($conn, $query) ? true : false;
		}
	}

	if(!empty($_FILES['uvodna_fotografija_dodaj']['name'])) {
		$uvodna_foto_tmp  = $_FILES['uvodna_fotografija_dodaj']['tmp_name'];
		$uvodna_foto_name = $_FILES['uvodna_fotografija_dodaj']['name'];
		if(move_uploaded_file($uvodna_foto_tmp, '../images/' . $uvodna_foto_name)) {
			$query = "UPDATE proizvodi SET uvodna_fotografija = '$uvodna_foto_name' WHERE id = @id_proizvoda";

			$uspjesnost[] = mysqli_query($conn, $query) ? true : false;
		}
	}

	echo in_array(false, $uspjesnost) ? json_encode(false) : json_encode(true);
