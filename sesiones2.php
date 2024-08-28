<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST" ){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];

        $user = [
            "nombre" => $nombre,
            "correo" => $email,
            "contrasena" => $contrasena
        ];
    $_SESSION["user"] = $user;
    echo 'Bienvenido ' . $_SESSION['user']['nombre'];
    }
    ?>
</body>
</html>