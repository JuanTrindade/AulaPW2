<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['login'] != true) {
	header("location: index.php");
}

switch ($_SESSION['tipousuario']) {
  case "cliente":
  echo"sucessoadm";
  header("Location: home.php");
    break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <title>Bem vindo</title>
</head>
<header class="blog-header py-3 bg-light">
        <div class="row flex-nowrap justify-content-between align-items-center col">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#"></a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">PODER DE ADM</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn btn-outline-primary mr-2 ml-5" href="Model/deslogar.php">Sair</a>
          </div>
        </div>
    </header>
<body style="background-color: rgb(233, 236, 239);">
    <br>
        <h3 class="text-center mt-4">
        	<?php 
            echo"Olá senhor ".$_SESSION['usuarioLogado'];

          ?>
        </h3>
        <div class="mt-4"></div>
        <center><img src="View/fora.jpg" class="" style="width: 700px; height: 400px;"></center>

</body>
</html>