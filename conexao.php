<?php
	//Conectar ao banco
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$bd = "test";
	
	//Criar a conexão
	$mysqli = new mysqli($host, $usuario, $senha, $bd);
	mysqli_set_charset( $mysqli, 'utf8');
	
	if($mysqli->connect_errno)
		echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_errno;
?>