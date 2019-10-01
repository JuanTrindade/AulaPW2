<?php  

session_start();

if (!isset($_SESSION['login']) || $_SESSION['login'] != true) {
	header("location: index.php");
}

switch ($_SESSION['tipousuario']) {
  case "Administrador":
  echo"sucessoadm";
  header("Location: adm.php");
    break;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Compre :D</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <style>
.parallax {
  /* The image used */
  background-image: url("View/par3.jpg");

  /* Set a specific height */
  min-height: 500px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body>


<header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#"></a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">
            <?php 
            echo"Olá ".$_SESSION['usuarioLogado']; ?>
            </a>

          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
              <a class="btn btn-md btn-outline-dark ml-4" href="Model/deslogar.php">Sair</a>
            </a>
          </div>
        </div>
      </header>
      <div class="nav-scroller">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="#">Games</a>
          <a class="p-2 text-muted" href="#">Técnologia</a>
          <a class="p-2 text-muted" href="#">Arduinos</a>
          <a class="p-2 text-muted" href="#">Promoções</a>
        </nav>
      </div>
      <div class="parallax">
      <hr>
	<br>
	<div class="mt-4"></div>
  <form class="">
    <ul class="">
    <?php 
            include "Model/modelProdutos.php";

            buscarOproduto();
        ?>
      <!--<div class="card-deck text-center container mx-auto">
        <div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm">
    <div class="card border border-dark">
      <div class="card-header">
        <h4 class="list-group-item text-light bg-dark">Xiomi redmi 7 plus</h4>
      </div>
      <div class="card-body">
       <img src="view/carrinho.png" style="width: 150px; height: 150px;">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Compre já: xiaomi redmi 7 plus</li>
          <li>126gb de memoria</li>
          <li>6gb de ram</li>
        </ul>
         <a style="text-decoration: none;"><button type="button" class="btn btn-outline-success btn-block btn-lg mx-auto">Comprar</button></a>
      </div>
    </div>
  </div>
    </ul>
    <ul>
      <div class="card-deck mb-3 text-center container mx-auto">
        <div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm">
    <div class="card border border-dark">
      <div class="card-header">
        <h4 class="list-group-item text-light bg-dark">Xiomi redmi 8 plus</h4>
      </div>
      <div class="card-body">
       <img src="view/carrinho.png" style="width: 150px; height: 150px;">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Compre já: xiaomi redmi 8 plus</li>
          <li>226gb de memoria</li>
          <li>16gb de ram</li>
        </ul>
         <a style="text-decoration: none;"><button type="button" class="btn btn-outline-success btn-block btn-lg">Comprar</button></a>
      </div>
    </div>
    </ul>
    <ul>
      <div class="mt-4"></div>
  <div class="card-deck text-center container mx-auto">
    <div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm"><div class="col-sm">
    <div class="card border border-dark">
      <div class="card-header">
        <h4 class="list-group-item text-light bg-dark">Xiomi redmi 9 plus</h4>
      </div>
      <div class="card-body">
       <img src="view/carrinho.png" style="width: 150px; height: 150px;">
        <ul class="list-unstyled mt-3 mb-4">
        </ul>
         <a style="text-decoration: none;"><button type="button" class="btn btn-outline-success btn-block btn-lg">Comprar</button></a>
      </div>
    </div> -->
    </ul>
  </form>

<div class="bg-dark card">
<!-- Footer -->
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase" style="color: white;">Obrigado</h5>
        <p style="color: white;">Sempre estamos prontos para isso.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase" style="color: white;">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" style="color: white;">Link 1</a>
          </li>
          <li>
            <a href="#!" style="color: white;">Link 2</a>
          </li>
          <li>
            <a href="#!" style="color: white;">Link 3</a>
          </li>
          <li>
            <a href="#!" style="color: white;">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 bg-dark" style="color: white;">© 2019 Copyright:
  </div>
  <!-- Copyright -->

</footer></div>
<!-- Footer -->
</body>
</html>