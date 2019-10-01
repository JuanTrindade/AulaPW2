<?php


include_once 'conexao.php';

	$sql = $conn->prepare("SELECT * FROM login WHERE (email = ? OR usuario = ?) AND senha = ? LIMIT 1");


$sql->bind_param("sss", $nome, $nome, $pass);

$sql->execute();

$resultado = $sql->get_result();
$linha = $resultado->fetch_assoc();

$sql -> close();
$conn -> close();

if (empty($linha))
{
	echo "Falhalogin";
	die();

}
else
{

	$_SESSION['idPessoa'] = $linha['cod'];
	$_SESSION['login'] = true;
	$_SESSION['nome'] = $linha['usuario'];
	$_SESSION['tipousuario'] = $linha['tipousuario'];

	$_SESSION['usuarioLogado'] = $linha['usuario'];

	switch ($linha['tipousuario']) {
	case "cliente":
	//echo "sucees";
	header("Location: ../home.php");
		break;
	case "Administrador":
	//echo "sucessoadm";
	header("Location: ../adm.php");
		break;
	default:
		echo "Falhalogin";
		die();
	}
}

?>