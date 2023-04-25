<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 03 visibilidade </title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Caneta.php';
        $cl = new Caneta;
        $cl->modelo="Bic cristal";
        $cl->cor="azul";
        var_dump($cl);
        ?>
        </pre>
    </body>
</html>
