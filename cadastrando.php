<?php
	include_once("conexao.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>LibLyb - Cadastro Realizado</title>
	<link rel="stylesheet" type="text/css" href="CSS/normalize.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700" rel="stylesheet" /> 
	<link rel="stylesheet" type="text/css" href="CSS/stilo.css" />
</head>
<body>
	
	<script type="text/javascript">
		function cadastrationsuccessful(){
			setTimeout("window.location='index.php'", 5000);
		}

		function cadastrationfailed(){
			setTimeout("window.location='index.php'", 5000);
		}
	</script>
	<?php
		$nome=$_POST['nome'];
		$sobrenome=$_POST['sobrenome'];
		$cidade=$_POST['cidade'];
		$estado=$_POST['estado'];
		$pais=$_POST['pais'];
		$email=$_POST['email'];
		$senha=$_POST['senha'];
		$sql=mysqli_query($conn,"INSERT INTO usuarios(nome, sobrenome, cidade, estado, pais, email, senha) VALUES('$nome', '$sobrenome', '$cidade', '$estado', '$pais', '$email', '$senha')");
		echo "<center><h2 style='color:green'>Cadastro realizado com sucesso!</h2></center>";
		echo "<center><h3 style='color:red'>Aguarde um momento...</h3></center>";
		echo "<script>cadastrationsuccessful()</script>";
		mysqli_close($conn);
	?>
</body>
</html>