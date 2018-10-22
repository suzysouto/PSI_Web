<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "cadastro";
	$conn = mysqli_connect($host, $user, $pass) or die(mysqli_error());
	mysqli_select_db($conn, $banco) or die(mysqli_error()); 
?>