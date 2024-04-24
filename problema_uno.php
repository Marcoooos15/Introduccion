<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Verdulería Pepe</title>
</head>
<body>
    <div class="container flex-container pricing-form">
    <h1>Consumo Final - Verdulería Pepe</h1>
    <p>A continuación se detallan los totales de su compra.<p>
    <?php
        $getCantidadManzanas = 0;
        $getCantidadBananas = 0;
        $kgManzana = 200;
        $kgBanana = 500;

        if (isset($_POST['submit'])) {
            $getCantidadBananas = (int)$_POST['banana'];
            $getCantidadManzana = (int)$_POST['manzana'];
        }
        
        $precioManz = $getCantidadManzanas * $kgManzana;
        $precioBana = $getCantidadBananas * $kgBanana;
        $totalPrecio = $precioManz + $precioBana;
        ?>

        <form action="" method="post">
            <input type="number" name="banana" placeholder="Bananas" min="0">
            <input type="number" name="manzana" placeholder="Manzanas" min="0">
            <input type="submit" value="Aceptar" name="submit" id="submitBtn">
        </form>

        <div>
            <p><?php echo "El precio de la manzana (por kg) es de $$kgManzana <br>";?></p>
            <p><?php echo "El precio de la banana (por kg) es de $$kgBanana <br>";?></p>
        </div>

        <div class="container flex-container">
            <p><?php echo "Total de Compra: $$totalPrecio";?></p>
        </div>
</body>
</html>