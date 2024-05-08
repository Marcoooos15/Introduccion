<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <?php
    $agenda = [];

    $agenda[] = 'Dentista a las 12h';
    $agenda[] = 'Juega Nacional a las 21h';
    $agenda[] = 'Reunión con amigos a las 23h';

    var_dump($agenda); 
    ?>
    <br>
    <?php
    $cambio_agenda = 0;
    $imprevisto = 'Dentista a las 16h, no a las 12h';
    $agenda[$cambio_agenda] = $imprevisto;

    var_dump($agenda);
    ?> 
        <ul>
            <?php
            foreach($agenda as $eventosDelDia){
                echo "<li>$eventosDelDia</li>";
            }?>
        </ul>   
</body>
</html>

<!--
<ul>
    <?php foreach($agenda as $eventosDelDia):?>
        <li><?php echo $color;?></li>
    <?php endforeach;?>
</ul>  -->