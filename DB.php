<?php
include_once("Producto.php");
// Aquí van las cosas de la base de datos y tal y pascual

// Lista de productos, creada a pelo
class DB
{
    public static $listaProductos;

    public static function inicial()
    {
        if (self::$listaProductos == null)
        {
            self::$listaProductos = [];
        }
        return self::$listaProductos;
    }

    public static function altaProducto(Producto $p)
    {
        var_dump($listaProductos);
        array_push($listaProductos, $p);
        var_dump($listaProductos);
    }

    public static function obtenTodosProductos()
    {
        // return Producto[]
    }

    public static function modificaProducto (Producto $p)
    {

    }

    public static function obtenProducto($codigo)
    {

    }

}