<?php
	session_start();

	$conn = mysqli_connect('localhost', 'root', '', 'cms');
	$logovani_korisnik_id = $_SESSION['user_id'];
	$uspjesnost = array();
	
	$sql = "SELECT image FROM users WHERE id = '$logovani_korisnik_id'";

	$result = mysqli_query($conn, $sql);
	$slika  = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	echo json_encode($slika);