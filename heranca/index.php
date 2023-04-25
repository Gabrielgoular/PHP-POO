<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Herança aula 10</title>
    </head>
    <body>
         <pre>
        <?php
             require_once './Pessoa.php';
             require_once './Aluno.php';
             require_once './Professor.php';
             require_once './Funcionario.php'; 
             
             $p1= new Pessoa("Alburquerque",56,"M");
             $p2= new Aluno(007,"PHP");
             $p3= new Professor("Portugues",1999);
             $p4= new Funcionario("Almo-charifado","");
             
             $p2->setNome("Totoro");
             $p2->setIdade(23);
             $p2->setSexo("M");
             $p3->setNome("Amancio");
             $p4->setNome("Bimael");
             
             print_r($p1);
             print_r($p2);
             print_r($p3);
             print_r($p4);
             echo 'Paramos a aula 11:20++';
        ?>
        </pre>
    </body>
</html>
