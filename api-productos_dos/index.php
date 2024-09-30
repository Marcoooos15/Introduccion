<?php 
require("Conexiondb.php");
header('Content-Type: application/json');

class ApiProductos 
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function obtenerTodos()
    {
        $stmt = $this->pdo->prepare(query: "SELECT * FROM productos");
        $stmt -> execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function agregar($nuevoIdProducto, $nombreProducto, $imagenProducto, $precioProducto, $condicionProducto, $stockProducto, $nombreEmpresa, $descripcionProducto, $categoriaProducto, $habilitacionProducto)
    {
        $stmt = $pdo->prepare("INSERT INTO producto (id_producto, titulo, imagen, precio_base, condicion, stock, nombre_empresa, descripcion, categoria, habilitacion_Producto) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        // Ejecutar la consulta
        if ($stmt->execute([$nuevoIdProducto, $nombreProducto, $imagenProducto, $precioProducto, $condicionProducto, $stockProducto, $nombreEmpresa, $descripcionProducto, $categoriaProducto, $habilitacionProducto])) {
            echo json_encode(['message' => 'Producto creado exitosamente']);
        } else {
            echo json_encode(['message' => 'Error al crear producto']);
        }
    }

    public function actualizarProducto($id, $nombre, $precio, $descripcion)
    {
        $stmt = $this->pdo->prepare("UPDATE productos SET nombre = ?, precio = ?, descripcion = ? WHERE id = ?");
        return $stmt->execute([$nombre, $precio, $descripcion, $id]);
    }

    public function eliminarProducto($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM productos WHERE id = ?");
        return $stmt->execute([$id]);
    }
}


//Configuracion de la base de datos
$host = 'localhost';
$dbname = 'productos_bd';
$username = 'root';
$password = '';

$conexiondb = new Conexiondb($host, $dbname, $username, $password);
$pdo = $conexiondb -> getPdo();

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e){
    die("Error al conectar: " . $e->GetMessage());
}
if($_SERVER['REQUEST_METHOD'] === 'GET') {
    $stmt = $pdo->prepare("SELECT * FROM productos");
    $stmt-> execute();
    $productos = $stmt->fetchALL(PDO::FETCH_ASSOC);
    echo json_encode($productos);
}
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $nombre = $data['nombre'];
    $precio = $data['precio'];
    $descripcion = $data['descripcion'];

    $stmt = $pdo->prepare("INSERT INTO productos (nombre, precio, descripcion) 
    VALUES (?, ?, ?)");
    if ($stmt->execute([$nombre, $precio, $descripcion])) {
        echo json_encode(['message' => 'Producto creado exitosamente']);
    }  else {
        echo json_encode(['message' => 'Error al crear el producto']);
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data['id']; 
    $nombre = $data['nombre'];
    $precio = $data['precio'];
    $descripcion = $data['descripcion'];

    $stmt = $pdo->prepare("UPDATE productos SET nombre = ?, precio = ?, descripcion = ? WHERE id = ?");

    if ($stmt->execute([$nombre, $precio, $descripcion, $id])) {
        echo json_encode(['message' => 'Producto actualizado exitosamente']);
    } else {
        echo json_encode(['message' => 'Error al actualizar el producto']);
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $data = json_decode(file_get_contents('php://input'), true);    
    $id = $data['id']; 

    $stmt = $pdo->prepare("DELETE FROM productos WHERE id = ?");

    if ($stmt->execute([$id])) {
        echo json_encode(['message' => 'Producto eliminado exitosamente']);
    } else {
        echo json_encode(['message' => 'Error al eliminar el producto']);
    }
}


?>