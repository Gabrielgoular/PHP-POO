<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio de biblioteca</title>
    </head>
    <body>
        <?php
            require_once './Pessoa.php';
            require_once './Livro.php';
            
            $p1[0]= new Pessoa("Pedro",22,"M");
            $p2[1]=new Pessoa("Valeria",19,"F");
            
            $l[0]= new Livro("PHPBasico","Zeca raxado",300, $p[0]);
            $l[1]= new Livro("POO PHP", "TUcamon",500, $p[0]);
            $l[2]= new Livro("PHP Avançado","Ana bauco",800, $p[1]);
            print_r($l[1]);
        ?>
    </body>
</html>
