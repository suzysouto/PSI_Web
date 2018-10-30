<?php 
	// Conexão com o banco de dados 
	include_once("conexao.php"); 
	 
	// Inicia sessões 
	session_start(); 
	 
	// Recupera o login 
	$email = isset($_POST["email"]) ? addslashes(trim($_POST["email"])) : FALSE; 
	// Recupera a senha, a criptografando em MD5 
	$senha = isset($_POST["senha"]) ? (trim($_POST["senha"])) : FALSE; 
	 
	// Usuário não forneceu a senha ou o login 
	if(!$email || !$senha){ 
		echo "Você deve digitar sua senha e login!"; 
		exit; 
	} 	 
	/** 
	* Executa a consulta no banco de dados. 
	* Caso o número de linhas retornadas seja 1 o login é válido, 
	* caso 0, inválido. 
	*/
	$sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'") or die(mysqli_error()); 
	//$total = mysqli_num_rows($sql); 
	$row = mysqli_fetch_assoc($sql);
	$_SESSION['dados_user'] = $row;
	 
	// Caso o usuário tenha digitado um login válido o número de linhas será 1.. 
	if($row > 0){		
		// TUDO OK! Agora, passa os dados para a sessão e redireciona o usuário 
		$_SESSION["dados_user"] = $row["email"];
		$_SESSION['dados_user'] = $row;
		header("Location: index_com_login.php"); 
		exit;
	} else{
		header("Location: login.php");
		exit;
	}
?>