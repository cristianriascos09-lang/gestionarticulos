<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

$sql = "INSERT INTO articulos(nombre,marca,precio,cantidad)
VALUES('$nombre','$marca','$precio','$cantidad')";

mysqli_query($conn, $sql);

header("Location:index.php");

?>