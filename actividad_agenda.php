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
        <!--  
        <ul>
            <?php
            foreach($agenda as $eventosDelDia){
                echo "<li style='color:red'>$eventosDelDia</li>";
            }?> 
        -->
        </ul>
<!-- Otra forma de hacer lo mismo, pero más fácil, esta es la ideal -->
        <ul>
            <?php foreach($agenda as $eventosDelDia):?>
                <li style="color:blue"><?php echo $eventosDelDia;?></li>
            <?php endforeach;?>
        </ul>  
</body>
</html>