<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
     *{ 
        background-color: skyblue;
     }
    </style>
    <title>Document</title>
</head>
<body>
    <!-- Líneas 15 a 27 están comentadas, es otra actividad. 
    <?php
        $palabra = 'abcdef';
        echo "$palabra"; 
    ?> <br>
    <?php 
        $palabra[2] = 'z';
        var_dump($palabra);
    ?> <br>
    <?php
        $lista = "manzana,naranja,banana,frutilla";
        $frutas = explode("," , $lista);
        print_r($frutas);
    ?> -->

    <?php
    $microrelato = 'El Club Nacional de Football es una institución deportiva uruguaya. Fue fundado el 14 de mayo de 1899 en Montevideo, por iniciativa de jóvenes estudiantes de la época, con la intención de consolidar una institución de fútbol para uruguayos criollos frente al predominio de clubes y practicantes extranjeros europeos de este deporte, particularmente ingleses y alemanes, siendo considerado así el «primer equipo criollo» del país y uno de los primeros clubes fundados por nacionales en América.';
        $palabras = explode (" " , $microrelato);
        $cont_palabras = count($palabras);
        $cont_caracteres = strlen($microrelato);
    //    print_r($cont_palabras);
    //    echo strlen($microrelato);
    //    echo $cont_caracteres;
    if($cont_caracteres <= 700 && $cont_palabras <= 100){
        echo '<h3>El cuento es: </h3><br>', $microrelato, '<br><span style="color:green;"><h3>Cumple con los requisitos</span></h3>';
    } else {
        echo 'El cuento es: <br>', $microrelato, '<br><span style="color:red;"><h3> No cumple con los requisitos, tiene más de 100 palabras y/o 700 caracteres</span></h3>';
    }
    ?>
    
</body>
</html>