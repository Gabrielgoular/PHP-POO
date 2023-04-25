<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>UEC</title>
    </head>
    <body>
        <?php
            require_once 'Lutador.php';
            require_once 'Luta.php';
            $l=array();
            $l[0]=new Lutador("Pretty Boy","França",31,1.75,68.9,11,2,1,"M");
            $l[1]=new Lutador("PutsCript","Brasil",29,1.68,57.8,14,2,3,"M");
            $l[2]=new Lutador("Snapshodow","EUA",35,1.65,80.9,12,2,1,"M");
            $l[3]=new Lutador("DeadCode","Australia",28,1.93,81.6,13,0,2,"M");
            $l[4]=new Lutador("Ufcobol","Brasil",37,1.70,119.3,5,4,3,"M");
            $l[5]=new Lutador("Nerdeard","EUA",30,1.81,105.7,12,2,4,"M");
            
            $UEC01 = new Luta();
            $UEC01 ->marcarLuta($l[0], $l[1]);
            $UEC01 ->lutar();
            $l[0]->status();
            $l[1]->status();
        ?>
    </body>
</html>
