<?php

session_start();



$nome = $_POST['nom'];



$pass = $_POST['sen'];



if (empty($nome)) 
{
	echo "ErroLogin";
	die();
}
elseif(empty($pass)) 
{
	echo "errosenha";
	die();
}

include_once '../Model/login.php';

 ?>






