<?php
    include_once("Producto.php");
    include_once("DB.php");

    session_start();

    if(isset($_POST["enviar"]))
    {
        var_dump($_POST);
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
    <?php 
    $listaProductos = DB::inicial();
    $listaProductos = DB::obtenTodosProductos(); 
    foreach($listaProductos as $p)
    {
        $c = $p->codigo;
        $n = $p->nombre;
        $pvp = $p->precio;

        echo "<p><form id='$c' action='index.php' method='post'>";
        echo "<input type='hidden' name='codigo' value='".$c."'/>";
        echo "<input type='hidden' name='nombre' value='".$n."'/>";
        echo "<input type='hidden' name='precio' value='".$pvp."'/>";
        echo "<input type='submit' name='enviar' value='Añadir'/>";
        echo " $n - ".$pvp." €";
        echo "</form></p>";
    }
    
    ?>
    <p><form id="nuevoProducto" action='index.php' method='post'>
            <label for="codigo">Codigo</label><input type="text" name="codigo" />
            <label for="nombre">Nombre</label><input type="text" name="nombre" />
            <label for="precio">Precio</label><input type="text" name="precio" />
            <input type="submit" name="enviar" />
    </form></p>
    <?php var_dump($_SESSION); // Check flow of files (debug you piece of ) ?>
</body>
</html>