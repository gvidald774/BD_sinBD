<?php
    include_once("Producto.php");
    include_once("DB.php");

    if(isset($_POST["enviar"]))
    {
        $p = new Producto($_POST["codigo"],$_POST["nombre"],$_POST["precio"]);
        DB::altaProducto($p);
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php $listaProductos = DB::inicial(); ?>
    <p>Some bullshit</p>
    <a href="verproductos.php">Ver productos</a>
    <form action="" id="formProductoIndividual", method="post">
        <label for="codigo">Código</label>
        <input type="text" name="codigo" id="codigo" /><br/>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" /><br/>
        <label for="precio">Precio</label>
        <input type="text" name="precio" id="precio" /><br/>
        <input type="submit" name="enviar" id="enviar" value="enviar" />
    </form>
    <?php var_dump($listaProductos); ?>
</body>
</html>