<?php

$servidor = "mysql-cristian1995.alwaysdata.net";
$usuario = "cristian1995";
$password = "clase123";
$bd = "tienda_motos";

$conn = mysqli_connect($servidor, $usuario, $password, $bd);

if(!$conn){
    die("Error de conexión");
}

?>