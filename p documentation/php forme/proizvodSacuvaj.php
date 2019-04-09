<?php
	$conn = mysqli_connect('localhost', 'root', '', 'cms');
	
	$proizvod_id               = $_POST['proizvod_id'];
	
	$naziv_izmjena             = $_POST['naziv_izmjena'];
	$name_izmjena              = $_POST['name_izmjena'];
	$opis_izmjena              = $_POST['opis_izmjena'];
	$description_izmjena       = $_POST['description_izmjena'];
	$uvodni_tekst_izmjena      = $_POST['uvodni_tekst_izmjena'];
	$introductory_text_izmjena = $_POST['introductory_text_izmjena'];
	$tekst_proizvoda_izmjena   = $_POST['tekst_proizvoda_izmjena'];
	$product_text_izmjena      = $_POST['product_text_izmjena'];
	$alt_tag_izmjena           = $_POST['alt_tag_izmjena'];
	$alt_tag_eng_izmjena       = $_POST['alt_tag_eng_izmjena'];
	
	$uspjesnost = array();

	$query = "UPDATE proizvodi SET naziv             = '$naziv_izmjena',
																 name              = '$name_izmjena',
																 opis              = '$opis_izmjena',
																 description       = '$description_izmjena',
																 uvodni_tekst      = '$uvodni_tekst_izmjena',
																 introductory_text = '$introductory_text_izmjena',
																 tekst_proizvoda   = '$tekst_proizvoda_izmjena',
																 product_text      = '$product_text_izmjena',
																 alt_tag           = '$alt_tag_izmjena',
																 alt_tag_eng       = '$alt_tag_eng_izmjena'
														 WHERE id              = '$proizvod_id'";
	
	$uspjesnost[] = mysqli_query($conn, $query) ? true : false;
	
	if(!empty($_FILES['cover_fotografija_izmjena']['name'])) {
		$cover_foto_tmp  = $_FILES['cover_fotografija_izmjena']['tmp_name'];
		$cover_foto_name = $_FILES['cover_fotografija_izmjena']['name'];
		if(move_uploaded_file($cover_foto_tmp, '../images/' . $cover_foto_name)) {
			$query = "UPDATE proizvodi SET cover_fotografija = '$cover_foto_name' WHERE id = '$proizvod_id'";

			$uspjesnost[] = mysqli_query($conn, $query) ? true : false;
		}
	}

	if(!empty($_FILES['uvodna_fotografija_izmjena']['name'])) {
		$uvodna_foto_tmp  = $_FILES['uvodna_fotografija_izmjena']['tmp_name'];
		$uvodna_foto_name = $_FILES['uvodna_fotografija_izmjena']['name'];
		if(move_uploaded_file($uvodna_foto_tmp, '../images/' . $uvodna_foto_name)) {
			$query = "UPDATE proizvodi SET uvodna_fotografija = '$uvodna_foto_name' WHERE id = '$proizvod_id'";

			$uspjesnost[] = mysqli_query($conn, $query) ? true : false;
		}
	}
	
	echo in_array(false, $uspjesnost) ? json_encode(false) : json_encode(true);