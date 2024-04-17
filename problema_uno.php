<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Verdulería Pepe</title>
</head>
<body>
    <h1>Consumo Final - Verdulería Pepe</h1>
    <p>A continuación se detallan los totales de su compra.<p>
    <?php
        $cantManzanas = 5;
        $cantBananas = 2;
        $kgManzana = 200;
        $kgBanana = 500;
        $precioManz = $cantManzanas * $kgManzana;
        $precioBana = $cantBananas * $kgBanana;
        $totalPrecio = $precioManz + $precioBana;

        echo "El precio de la manzana (por kg) es de $$kgManzana <br>";
        echo "El precio de la banana (por kg) es de $$kgBanana <br>";
        echo "Total de Compra: $$totalPrecio";
    ?>
    
</body>
</html>