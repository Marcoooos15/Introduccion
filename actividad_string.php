<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
    <?php
        $palabra = 'abcdef';
    //    echo "$palabra"; 
    ?> <br>
    <?php 
            $palabra[2] = 'z';
    //    var_dump($palabra);
    ?> <br>
    <?php
        $lista = "manzana,naranja,banana,frutilla";
        $frutas = explode("," , $lista);
        print_r($frutas);
    ?>
    -->
    <?php
    $microrelato = 'El Club Nacional de Football es una institución deportiva uruguaya. Fue fundado el 14 de mayo de 1899 en Montevideo, por iniciativa de jóvenes estudiantes de la época, con la intención de consolidar una institución de fútbol para uruguayos criollos frente al predominio de clubes y practicantes extranjeros europeos de este deporte, particularmente ingleses y alemanes, siendo considerado así el «primer equipo criollo» del país y uno de los primeros clubes fundados por nacionales en América.';
        $cont_palabras = explode (" " , $microrelato);
    //    print_r($cont_palabras);
    count($cant_palabras);
    ?>
</body>
</html>