<?php
include_once("Producto.php");

// Aquí van las cosas de la base de datos y tal y pascual

// Lista de productos, creada a pelo
class DB
{
    public static $listaProductos = array();

    public static function inicial()
    {
        $listaProductos[1] = new Producto(1,"Pato",1);
        $listaProductos[2] = new Producto(2,"Gato",2);
        $listaProductos[3] = new Producto(3,"Guanajuato",3000000);
        $listaProductos[4] = new Producto(5, "Libro de rimas", 10);
        $listaProductos[5] = new Producto(6, "Selección Nacional Neozelandesa de 1975", 19999);
        $listaProductos[6] = new Producto(7, "Informe Cuarrécano", 20);
        $_SESSION['listaProductos'] = &$listaProductos;
    }

    public static function altaProducto(Producto $p)
    {
        $listaProductos = $_SESSION['listaProductos'];
        $listaProductos[$p->codigo] = $p;
        $_SESSION['listaProductos'] = $listaProductos;
    }

    public static function obtenTodosProductos()
    {
        return $_SESSION['listaProductos']; // Not Sure This Works Like This
    }

    public static function obtenProducto($codigo)
    {
        if (isset($listaProductos[$codigo]))
        {
            $p = $listaProductos[$codigo];
            return $p;
        }
        else
        {
            return null;
        }
    }
}