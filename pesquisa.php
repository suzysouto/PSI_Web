<!DOCTYPE html>
<html lang ="pt-br">
<head>
    <meta charset="utf-8"/>
	<title>LibLyb - Pesquisa</title>
	<link rel="stylesheet" type="text/css" href="CSS/normalize.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700" rel="stylesheet" /> 
	<link rel="stylesheet" type="text/css" href="CSS/stilo.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous" />

	<script type="text/javascript">
		function fazerPesquisa(){
			
		}
	</script>
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
							<li><a href="index.php"><i class="fas fa-home"> Início</i></a></li>
							<li><a href="cadastro.php"><i class="fas fa-user"> Cadastro</i></a></li>
							<li><a href="login.php"><i class="fas fa-user-circle"> Login</i></a></li>
						</ul>
					</nav>
				</div>
			</header>
		</div>
	</div>
    <div class ="linha">
    	<section>
    		<div class="coluna col11 submenus">
				<nav>
					<ul class="menu inline sem-marcador">
						<li><a href="categorias.php" class="botao">Categorias</a></li>
						<li><a href="pesquisa.php" class="botao"><i class="fas fa-search"></i> Pesquisa</a></li>
					</ul>
				</nav>
			</div>
			<div class="coluna col10 pesq">
				<form name="searchform" method="get" action="" onsubmit="return fazerPesquisa();">
					<input type="text" name="pesquisa" placeholder="Pesquise aqui ..." required autofocus />
					<input type="submit" name="enviar" class="btn" value="Pesquisar" />
				</form>
			</div>
			<!--<div class=" coluna search-box">
				<input class="search-txt" type="text" name="search" placeholder="Pesquisar ..." />
					<a class="search-btn">
						<i class="fas fa-search"></i>
					</a>
			</div>-->
		</section>
	</div>
</body>
</html>
