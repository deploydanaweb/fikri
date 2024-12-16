<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "db_akademik";
$conn = mysqli_connect($server, $user, $pass, $database);
	if (!$conn) {
		ie("Connect Failed:".mysqli_connect_error());
	}
?>