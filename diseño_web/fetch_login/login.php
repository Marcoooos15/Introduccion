<?php
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

if (empty($usuario) || empty($clave)) {
    echo json_encode('Advertencia, debes llenar todos los campos');
} else {
    echo json_encode("Correcto, Usuario: $usuario. Contraseña: $clave");
}
