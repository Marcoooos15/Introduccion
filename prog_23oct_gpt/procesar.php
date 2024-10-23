<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_GET['nombre']) && isset($_GET['email'])) {
    $nombre = htmlspecialchars($_GET['nombre']);
    $email = htmlspecialchars($_GET['email']);

    echo "Nombre: " . $nombre . "<br>";
    echo "Email: " . $email;
} else {
    echo "Faltan datos.";
}
?>
</body>
</html>