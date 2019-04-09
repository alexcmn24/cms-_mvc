<?php
	
	$conn = mysqli_connect('localhost', 'root', '', 'cms');

	$proizvod_id = $_POST['proizvod_id'];
	
	$query = "SELECT * FROM proizvodi WHERE id = '$proizvod_id'";
	
	$result = mysqli_query($conn, $query);
	$proizvod = mysqli_fetch_all($result, MYSQLI_ASSOC);

	echo json_encode($proizvod);