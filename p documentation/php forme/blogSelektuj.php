<?php
	
	$conn = mysqli_connect('localhost', 'root', '', 'cms');

	$blog_id = $_POST['blog_id'];

	$query = "SELECT * FROM blogovi WHERE id = '$blog_id'";

	$result = mysqli_query($conn, $query);
	$blog   = mysqli_fetch_all($result, MYSQLI_ASSOC);

	echo json_encode($blog);