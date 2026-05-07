<?php

include("conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM articulos WHERE id='$id'";
$resultado = mysqli_query($conn,$sql);

$fila = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Artículo</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="container">

    <div class="formulario">

        <h2>Editar Artículo</h2>

        <form action="actualizar.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

            <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>">

            <input type="text" name="marca" value="<?php echo $fila['marca']; ?>">

            <input type="number" step="0.01" name="precio" value="<?php echo $fila['precio']; ?>">

            <input type="number" name="cantidad" value="<?php echo $fila['cantidad']; ?>">

            <button type="submit">Actualizar</button>

        </form>

    </div>

</div>

</body>
</html>