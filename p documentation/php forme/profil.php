<?php
	session_start();
	
	$conn = mysqli_connect('localhost', 'root', '', 'cms');
	$logovani_korisnik_id = $_SESSION['user_id'];

	if(isset($_POST['trenutna_lozinka'])) {
		$sql = "SELECT password FROM users WHERE id = '$logovani_korisnik_id'";

		$result           = mysqli_query($conn, $sql);
		$password         = mysqli_fetch_all($result, MYSQLI_ASSOC);
		$trenutna_lozinka = $_POST['trenutna_lozinka'];

		echo password_verify($trenutna_lozinka, $password[0]['password']) ? json_encode(true) : json_encode(false);
	}

	if(isset($_POST['nova_lozinka'])) {
		$nova_lozinka      = $_POST['nova_lozinka'];
		$nova_lozinka_hash = password_hash($nova_lozinka, PASSWORD_DEFAULT);

		$sql = "UPDATE users SET password = '$nova_lozinka_hash' WHERE id = $logovani_korisnik_id";
		
		echo mysqli_query($conn, $sql) ? json_encode(true) : json_encode(false);
	}
