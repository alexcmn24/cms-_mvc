<?php
	$conn = mysqli_connect('localhost', 'root', '', 'cms');

	$naslov_izmjena            = $_POST['naslov_izmjena'];
	$ime_i_prezime_izmjena     = $_POST['ime_i_prezime_izmjena'];
	$vrijeme_izmjena           = $_POST['vrijeme_izmjena'];
	$uvodni_tekst_izmjena      = $_POST['uvodni_tekst_izmjena'];
	$glavni_tekst_izmjena      = $_POST['glavni_tekst_izmjena'];
	$alt_tag_izmjena           = $_POST['alt_tag_izmjena'];
	$title_izmjena             = $_POST['title_izmjena'];
	$full_name_izmjena         = $_POST['full_name_izmjena'];
	$introductory_text_izmjena = $_POST['introductory_text_izmjena'];
	$main_text_izmjena         = $_POST['main_text_izmjena'];
	$alt_tag_eng_izmjena       = $_POST['alt_tag_eng_izmjena'];
	$tagovi_izmjena            = $_POST['tagovi_izmjena'];
	$tags_izmjena              = $_POST['tags_izmjena'];
	
	$blog_id                   = $_POST['blog_id'];

	$query = "UPDATE blogovi SET naslov            = '$naslov_izmjena',
															 ime_i_prezime     = '$ime_i_prezime_izmjena',
															 vrijeme           = '$vrijeme_izmjena',
															 uvodni_tekst      = '$uvodni_tekst_izmjena',
															 glavni_tekst      = '$glavni_tekst_izmjena',
															 alt_tag           = '$alt_tag_izmjena',
															 title             = '$title_izmjena',
															 full_name         = '$full_name_izmjena',
															 introductory_text = '$introductory_text_izmjena',
															 main_text         = '$main_text_izmjena',
															 alt_tag_eng       = '$alt_tag_eng_izmjena',
															 tagovi            = '$tagovi_izmjena',
															 tags              = '$tags_izmjena'
													 WHERE id = '$blog_id'";

	$uspjesnost[] = mysqli_query($conn, $query) ? true : false;

	if(!empty($_FILES['cover_fotografija_izmjena']['name'])) {
		$cover_foto_tmp  = $_FILES['cover_fotografija_izmjena']['tmp_name'];
		$cover_foto_name = $_FILES['cover_fotografija_izmjena']['name'];
		if(move_uploaded_file($cover_foto_tmp, '../images/' . $cover_foto_name)) {
			$query = "UPDATE blogovi SET cover_fotografija = '$cover_foto_name' WHERE id = '$blog_id'";

			$uspjesnost[] = mysqli_query($conn, $query) ? true : false;
		}
	}

	echo in_array(false, $uspjesnost) ? json_encode(false) : json_encode(true);