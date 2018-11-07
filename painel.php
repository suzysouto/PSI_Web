<?php
	include_once("conexao.php");
	// Inicia sessões 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Liblyb - Espaço do usuário</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="CSS/normalize.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700" rel="stylesheet" /> 
	<link rel="stylesheet" type="text/css" href="CSS/stilo.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous" />
</head>
<body>
	<div class="header">
		<div class="linha">
			<header>
				<div class="coluna col4">
					<h1 class="logo"><strong>LibLyb</strong></h1>
				</div>
				<div class="coluna col8">
					<nav>
						<ul class="menu inline sem-marcador">
							<li><a href="index_com_login.php"><i class="fas fa-home"> Início</i></a></li>
							<li><a href="index.php"><i class="fas fa-user-circle"> Sair</i></a></li>
						</ul>
					</nav>
				</div>
			</header>
		</div>
	</div>
	<div class="linha">
		<section>
			<div class="coluna col11 submenus">
				<nav>
					<ul class="menu inline sem-marcador">
						<li><a href="categoria_com_login.php" class="botao">Categorias</a></li>
						<li><a href="pesquisa_com_login.php" class="botao"><i class="fas fa-search"></i> Pesquisa</a></li>
					</ul>
				</nav>
				<div class="coluna col11 datauser">
					<br><center><h1 class ="open">Conta</h1></center><br><br>
					
					<form class="data_user">
						<strong>Nome:</strong> <label><?php echo $_SESSION['dados_user']['nome'];?></label><br><br>
						<strong>Sobrenome:</strong> <label><?php echo $_SESSION['dados_user']['sobrenome'];?></label><br><br>
						<strong>Email:</strong> <label><?php echo $_SESSION['dados_user']['email'];?></label><br><br>
						<strong>Senha:</strong> <label><?php echo $_SESSION['dados_user']['senha'];?></label>
					</form>
				</div>					
			</div>
		</section>
	</div>
</body>
</html>