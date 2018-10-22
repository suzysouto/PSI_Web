<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>LibLyb - Login</title>
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
							<li><a href="index.php"><i class="fas fa-home"> Início</i></a></li>
							<li><a href="cadastro.php"><i class="fas fa-user"> Cadastro</i></a></li>
							<li><a href="login.php"><i class="fas fa-user-circle"> Login</i></a></li>
						</ul>
					</nav>
				</div>
			</header>
		</div>
	</div>
	<div class="linha">
		<section>
			<div class="coluna col7 login">
				<h2 class="log">Faça login</h2>
				<form name="loginform" method="post" action="userauthentication.php">
					<input id="email" type="text" placeholder="Email" name="email" required autofocus /><br><br>
					<input id="senha" type="password" placeholder="Senha" name="senha" required /><br><br>
					<input type="submit" class="botao" name="enviar" value="Entrar" />
				</form>
			</div>
		</section>
	</div>
</body>
</html>