<?php

// Y aquí van todas las cosas del producto y tal y sus datos y demás historias de esas


class Producto
{
    private $codigo;
    private $nombre;
    private $precio;

    public function __construct($cod, $nom, $pre)
    {
        $this->codigo = $cod;
        $this->nombre = $nom;
        $this->precio = $pre;
    }

    public function __get($property)
    {
        if(property_exists($this, $property))
        {
            return $this->$property;
        }
    }

    public function __set($property,$value)
    {
        if(property_exists($this, $property))
        {
            $this->$property = $value;
        }
    }
}


