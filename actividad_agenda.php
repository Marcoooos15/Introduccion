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
            <li><?php var_dump($agenda[0]); ?>
            <li><?php var_dump($agenda[1]); ?>
        </ul>   
</body>
</html>
