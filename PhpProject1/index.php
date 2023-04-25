<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Cartao.php';
        $c1= new Cartao;
        $c1->nome= "Gabriel";
        $c1->entrada = 7;
        $c1->saida1 = 11.18;
        $c1->entrada2 = 13;
        $c1->saida2 = 17.30;
        print_r($c1);
        
        ?>
    </body>
</html>
