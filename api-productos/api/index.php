<?php
$host = 'localhost';
$dbname = 'productos_bd';
$username = 'root';
$password = '';
header('Content-Type; apllication/json');

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
        echo json_decode(['message' => 'Producto creado exitosamente']);
    }  else {
        echo json_encode(['message' => 'Error al crear el producto']);
    }
}
?>