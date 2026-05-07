<?php

include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM articulos WHERE id='$id'";

mysqli_query($conn,$sql);

header("Location:index.php");

?>