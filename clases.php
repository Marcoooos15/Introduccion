<?php
class Producto{
    private $id;
    private $nombre;
    private $precio;
    public function __construct($id, $nombre, $precio)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
    public function obtenerDetalles()
    {
        return "ID: $this->id, Nombre: $this->nombre, Precio: $this->precio";
    }
}
$producto1 = new Producto(1, "Laptop", 1500);
echo $producto1->obtenerDetalles();
?>