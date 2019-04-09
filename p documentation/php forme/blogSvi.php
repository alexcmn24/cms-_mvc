<?php
	$conn = mysqli_connect('localhost', 'root', '', 'cms');

	$query = 'SELECT * FROM blogovi';

	$result  = mysqli_query($conn, $query);
	$blogovi = mysqli_fetch_all($result, MYSQLI_ASSOC);
	echo json_encode($blogovi);
