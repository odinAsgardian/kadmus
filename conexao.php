<?php
    $hostname = "localhost";
$bancodedados = "kadmus";
$usuario = "root";
$senha = "";

$connect=mysqli_connect($hostname, $usuario, $senha, $bancodedados);
if (!$connect){
	die("Connection Failed!: " . mysqli_connect_error());
}
/*$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_error) {
    echo "Falha ao conectar: (" . $mysqli->connect_error . ") " . $mysqli->connect_error;
}*/

?>