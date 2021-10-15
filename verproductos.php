<?php
    // OBSOLETE BORRAR PÁGINA
    include_once("Producto.php");
    include_once("DB.php");

    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
</head>
<body>
    <p>Some more bullshit</p>
    <?php var_dump(DB::$listaProductos); ?>
</body>
</html>