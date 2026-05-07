<?php

$servidor = "mysql-cristian1995.alwaysdata.net";
$usuario = "cristian1995";
$password = "clase123";
$bd = "cristian1995_gestionarticulos";

$conn = mysqli_connect($servidor, $usuario, $password, $bd);

if(!$conn){
    die("Error de conexión");
}

?>