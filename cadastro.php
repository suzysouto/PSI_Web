<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>LibLyb - Cadastro</title>
	<link rel="stylesheet" type="text/css" href="CSS/normalize.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700" rel="stylesheet" /> 
	<link rel="stylesheet" type="text/css" href="CSS/stilo.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous" />
<script language="JavaScript">
	function enviardados(){
		if(document.dados.nome.value=="" || document.dados.nome.value.length < 8){
			alert( "Preencha campo NOME corretamente!" );
			document.dados.nome.focus();
			return false;
		} 	  
		if( document.dados.email.value=="" || document.dados.email.value.indexOf('@')==-1 || document.dados.email.value.indexOf('.')==-1 ){
			alert( "Preencha campo E-MAIL corretamente!" );
			document.dados.email.focus();
			return false;
		}
		return true;
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
	<div class="linha">
		<section>
			<div class="coluna col7 cadastro">
				<h2 class="cad">Formulário de cadastro</h2><br>
				
				<form method="post" action="cadastrando.php" name="dados" onsubmit="return enviardados();">
					<input type="text" name="nome" placeholder="Digite seu nome aqui..." id="nome" required autofocus /><br><br>
					<input type="text"  name="sobrenome" placeholder="Sobrenome" id="sobrenome" required /><br><br>
					<input type="text" name="cidade" placeholder="Cidade" id="cidade" required /><br><br>
					<input type="text" name="estado" placeholder="Estado" id="estado" required /><br><br>
					<input type="text" name="pais" placeholder="País" id="pais" required /><br><br>
					<input type="text"name="email" placeholder="Email" id="email" required /><br><br>
					<input type="password" name="senha" placeholder="Senha" id="senha" required /><br><br>
					<input type="submit" class="botao" name="enviar" value="Cadastrar" />
				</form>
			</div>
		</section>
	</div>
</body>
</html>