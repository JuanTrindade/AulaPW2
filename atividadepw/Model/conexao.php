<?php

	$server = '127.0.0.1';
	$usuario = 'root';
	$senha = '';
	$dtb = 'cadastropw';

	$conn = mysqli_connect($server, $usuario, $senha, $dtb);
	$sql= "SET NAMES 'utf8'";
	mysqli_query($conn, $sql);



	if (mysqli_connect_error($conn)) 
	{
		echo "ERRO NA CONEXÃO: " .mysqli_connect_error();
		die();
	}
?>