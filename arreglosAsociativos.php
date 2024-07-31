<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$persona=[
    "nombre" => "Gonzalo",
    "apellido" => "Perez",
    "edad" => 30,
    "ciudad" => "Montevideo",
    "sexo" => "Masculino"
    ];
echo $persona["nombre"]. " ". $persona["apellido"]. " tiene ". $persona["edad"]. " años, vive en ". $persona["ciudad"]. " y es de sexo ". $persona["sexo"]; 
?> <br>
<?php
$persona["nombre"] = "Gonza";
$persona["ciudad"] = "Buenos Aires";
$persona["edad"] = 31;
$persona["auto"] = true;
$persona["vacaciones"] = false;
var_dump($persona);
?>
</body>
</html>