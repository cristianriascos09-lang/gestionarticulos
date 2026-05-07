<?php
include("conexion.php");

$sql = "SELECT * FROM articulos";
$resultado = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda de Repuestos de Moto</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<header>
    <h1>🏍️ MotoParts Store</h1>
    <p>Venta de repuestos y accesorios para motos</p>
</header>

<div class="container">

    <div class="formulario">

        <h2>Agregar Artículo</h2>

        <form action="guardar.php" method="POST">

            <input type="text" name="nombre" placeholder="Nombre del artículo" required>

            <input type="text" name="marca" placeholder="Marca" required>

            <input type="number" step="0.01" name="precio" placeholder="Precio" required>

            <input type="number" name="cantidad" placeholder="Cantidad" required>

            <button type="submit">Guardar Artículo</button>

        </form>

    </div>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Artículo</th>
            <th>Marca</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Acciones</th>
        </tr>

        <?php while($fila = mysqli_fetch_assoc($resultado)){ ?>

        <tr>

            <td><?php echo $fila['id']; ?></td>

            <td><?php echo $fila['nombre']; ?></td>

            <td><?php echo $fila['marca']; ?></td>

            <td>$ <?php echo $fila['precio']; ?></td>

            <td><?php echo $fila['cantidad']; ?></td>

            <td>

                <a class="btn-editar" href="editar.php?id=<?php echo $fila['id']; ?>">
                    Editar
                </a>

                <a class="btn-eliminar" href="eliminar.php?id=<?php echo $fila['id']; ?>">
                    Eliminar
                </a>

            </td>

        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>