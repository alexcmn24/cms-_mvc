<?php
	session_start();

	$conn = mysqli_connect('localhost', 'root', '', 'cms');
	$logovani_korisnik_id = $_SESSION['user_id'];
	$uspjesnost = array();

	$profilna_foto_tmp  = $_FILES['profilna_foto']['tmp_name'];
	$profilna_foto_name = $_FILES['profilna_foto']['name'];
	if(move_uploaded_file($profilna_foto_tmp, '../images/' . $profilna_foto_name)) {
		$sql = "UPDATE users SET image = '$profilna_foto_name' WHERE id = '$logovani_korisnik_id'";

		$uspjesnost[] = mysqli_query($conn, $sql) ? true : false;
	}

	echo in_array(false, $uspjesnost) ? json_encode(false) : json_encode(true);