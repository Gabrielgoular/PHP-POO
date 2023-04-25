<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Encapsulamento</title>
    </head>
    <body>
        <h1>PROJETO CONTROLE REMOTO!</h1>
        <?php
            require_once 'ControleRemoto.php';
            $c= new ControleRemoto();
            $c->ligar();
            $c->abrieMenu();
        ?>
    </body>
</html>
