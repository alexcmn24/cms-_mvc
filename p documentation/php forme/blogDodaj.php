<?php
	$conn = mysqli_connect('localhost', 'root', '', 'cms');
	
	$naslov_dodaj            = $_POST['naslov_dodaj'];
	$title_dodaj             = $_POST['title_dodaj'];
	$ime_i_prezime_dodaj     = $_POST['ime_i_prezime_dodaj'];
	$full_name_dodaj         = $_POST['full_name_dodaj'];
	$vrijeme_dodaj           = $_POST['vrijeme_dodaj'];
	$uvodni_tekst_dodaj      = $_POST['uvodni_tekst_dodaj'];
	$introductory_text_dodaj = $_POST['introductory_text_dodaj'];
	$glavni_tekst_dodaj      = $_POST['glavni_tekst_dodaj'];
	$main_text_dodaj         = $_POST['main_text_dodaj'];
	$alt_tag_dodaj           = $_POST['alt_tag_dodaj'];
	$alt_tag_eng_dodaj       = $_POST['alt_tag_eng_dodaj'];
	$tagovi                  = $_POST['tagovi_dodaj'];
	$tags                    = $_POST['tags_dodaj'];

	$uspjesnost = array();
	
	$query = "INSERT INTO blogovi (naslov, title, ime_i_prezime, full_name, vrijeme, uvodni_tekst, introductory_text, glavni_tekst, main_text, alt_tag, alt_tag_eng, tagovi, tags, status) VALUES ('$naslov_dodaj', '$title_dodaj', '$ime_i_prezime_dodaj', '$full_name_dodaj', '$vrijeme_dodaj', '$uvodni_tekst_dodaj', '$introductory_text_dodaj', '$glavni_tekst_dodaj', '$main_text_dodaj', '$alt_tag_dodaj', '$alt_tag_eng_dodaj', '$tagovi', '$tags', 'nekativan')";

	$uspjesnost[] = mysqli_query($conn, $query) ? true : false;

	$query = "SET @id_bloga = LAST_INSERT_ID()";
	$uspjesnost[] = mysqli_query($conn, $query) ? true : false;
	
	if(!empty($_FILES['cover_fotografija_dodaj']['name'])) {
		$cover_foto_tmp  = $_FILES['cover_fotografija_dodaj']['tmp_name'];
		$cover_foto_name = $_FILES['cover_fotografija_dodaj']['name'];
		if(move_uploaded_file($cover_foto_tmp, '../images/' . $cover_foto_name)) {
			$query = "UPDATE blogovi SET cover_fotografija = '$cover_foto_name' WHERE id = @id_bloga";

			$uspjesnost[] = mysqli_query($conn, $query) ? true : false;
		}
	}

	echo in_array(false, $uspjesnost) ? json_encode($uspjesnost) : json_encode($uspjesnost);