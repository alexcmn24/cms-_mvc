<?php
	$conn = mysqli_connect('localhost', 'root', '', 'cms');

	$keyword    = $_POST['keyword'];
	$uspjesnost = array();

	$query = "SELECT * FROM blogovi WHERE
																				(naslov LIKE '%" . $keyword . "%') OR
																				(title LIKE '%". $keyword. "%') OR
																				(ime_i_prezime LIKE '%". $keyword. "%') OR
																				(full_name LIKE '%". $keyword. "%') OR
																				(uvodni_tekst LIKE '%". $keyword. "%') OR
																				(introductory_text LIKE '%". $keyword. "%') OR
																				(glavni_tekst LIKE '%". $keyword. "%') OR
																				(main_text LIKE '%". $keyword. "%') OR
																				(tagovi LIKE '%". $keyword. "%') OR
																				(tags LIKE '%". $keyword. "%')
																	ORDER BY vrijeme DESC";

	$result  = mysqli_query($conn, $query);
	$blogovi = mysqli_fetch_all($result, MYSQLI_ASSOC);
	echo json_encode($blogovi);

