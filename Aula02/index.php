<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    
        <?php
        require_once 'Caneta.php';
        $cl = new Caneta;
        $cl ->cor = "Azul";
        $cl ->ponta = 0.5;
        $cl ->tampada = false;
        $cl->tampar();
        $cl->rabiscar();
        
        ?>
      
    </body>
</html>
