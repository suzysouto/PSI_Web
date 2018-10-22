<?php
	include_once("conexao.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Liblyb - Autenticando</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="CSS/normalize.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700" rel="stylesheet" /> 
	<link rel="stylesheet" type="text/css" href="CSS/stilo.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous" />
	<script type="text/javascript">
		function loginsuccessful(){
			setTimeout("window.location='painel.php'", 2000);
		}

		function loginfailed(){
			setTimeout("window.location='login.php'", 2000);
		}
	</script>

</head>
<body>
	<?php
	$email=$_POST['email'];
	$senha=$_POST['senha'];
	$sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'") or die(mysqli_error());
	$row = mysqli_num_rows($sql);

	if($row > 0){
		session_start();
		$_SESSION['email']=$_POST['email'];
		$_SESSION['senha']=$_POST['senha'];
		echo "<script>loginsuccessful()</script>";
	} else{
		echo "<script>loginfailed()</script>";
	}
?>
</body>
</html>