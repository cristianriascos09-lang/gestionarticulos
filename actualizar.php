<?php

include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

$sql = "UPDATE articulos 
SET nombre='$nombre',
marca='$marca',
precio='$precio',
cantidad='$cantidad'
WHERE id='$id'";

mysqli_query($conn, $sql);

header("Location:index.php");

?>