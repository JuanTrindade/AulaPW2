<?php
$_POST['user'];
$_POST['senha'];
$_POST['end'];
$_POST['sexo'];
$_POST['cpf'];

$nome = $_POST['user'];
$pass = $_POST['senha'];
$eder = $_POST['end'];
$sex = $_POST['sexo'];
$cppf = $_POST['cpf'];


$con = mysqli_connect("localhost" , "root" , "" , "cadastro");

if (!$con) 
{
	die("MORREU");
}
echo "Conexão feita";

$query = "INSERT INTO pessoas (nome, idade, endereco, sexo, idcpf) VALUES ('$nome' , '$pass', '$eder', '$sex' , '&cppf')";

if (mysqli_query($con, $query)) 
{
	echo "<br>";
	echo "<br>";
	echo "Campo Adicionado";
}
else
{
	echo "<br>";
	echo "ERRO";
}

echo "<br>";
echo "<br>";
echo "<a href= 'ola.html'>voltar";

?>