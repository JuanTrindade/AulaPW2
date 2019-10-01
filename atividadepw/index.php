<?php

session_start();

/*if (isset($_SESSION['login']) $_SESSION['login'] != true) {
	header("location: ../");
}*/

date_default_timezone_set('America/Sao_Paulo');


?>

<!DOCTYPE html>
<html>
<head>
	<title>Calcular</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>
<div class="mt-5"></div>
<div class="container">
	<form method="post" action="Controler/Validar.php" id="login">
	<center>
		<div class="form-group col-md-5" style="padding-top: 150px;">
			<div class="card border border-danger mt-4">
		<center><div class="list-group-item text-light bg-danger">Login</div></center>
		<div class="mt-2">
		</div>
	  <label for="inputUser">Nome ou E-MAIL</label>
      <input type="text" class="form-control col-md-10" id="inputUser" placeholder="Nome" name="nom">
      <center><div class="invalid-feedback d-none col-8" id="userErro">Preencha o campo login</div></center>
	  <div class="mt-4"></div>
      	  <label for="inputPass">Senha</label>
      <input type="password" class="form-control col-md-10" id="inputPass" placeholder="Senha" name="sen">
      <center></center><div class="invalid-feedback d-none col-8" id="passErro">Preencha o campo senha</div>
     <!-- <label for="pess">Peso</label>
      <input type="text" class="form-control" id="pess" placeholder="Peso" name="peso">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Altura</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="altura" name="alt">
    </div></center>-->
<div class="mt-3"></div>
	<center><div class="invalid-feedback d-none" id="erroLogin">Usuario ou senha invalido</div></center>
    <a href="#" class="">Esqueci minha senha</a>
	<div class="mt-3"></div>
	<div class="">
		<input type="submit" name="" value="Enviar" class="btn btn-outline-primary px-5">
    	<input type="reset" name="" value="limpar" class="btn btn-danger px-5">
	</div>
    <br>			
</form>
</div>

<script type="text/javascript" src="bootstrap/node_modules/jquery/dist/jquery.js"></script>
<script type="text/javascript" src="bootstrap/node_modules/popper.js/dist/umd/popper.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

<!-- <script type="text/javascript" src="javascript/validacoes.js"></script> -->

</body>
</html>