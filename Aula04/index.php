<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta.php';
            $cl= new Caneta("BIC",0.5,"Azul");
            $cl2= new Caneta("Malval",0.8,"Preta");
            print_r($cl);
            print_r($cl2);
         
        ?>
        </pre>
    </body>
</html>
