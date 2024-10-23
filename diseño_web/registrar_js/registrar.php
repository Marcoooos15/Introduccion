<?php

// Toma los datos del formulario.
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];

$nombredelservidor = "localhost";
$nombredeusuario = "root";
$password = "";
$basededatos = "liceo";

// Crear la conexión
$conn = new mysqli($nombredelservidor, $nombredeusuario, $password, $basededatos);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Preparar la consulta SQL
$sql = "INSERT INTO estudiante VALUES ('$cedula', '$nombre', '$apellido', '$direccion', '$ciudad')";

$response = array();

if ($conn->query($sql)) {
    $response["success"] = true;
} else {
    $response["success"] = false;
    $response["error"] = "Error: " . $sql . "<br/>" . $conn->error;
}

// Cierra la conexión
$conn->close();

// Envia respuesta como JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
