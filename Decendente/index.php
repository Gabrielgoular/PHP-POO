<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once './Aluno.php';
            require_once './Bolsista.php';
            require_once './Professor.php';
            require_once './Tecnico.php';
            require_once './Visitante.php';
          $a[0]= new Aluno(111,"PHP");
          $a[0]->setIdade(17);
          $a[0]->setNome("Roberta");
          $a[0]->setSexo("F");
          $a[0]->fazerAniver();
          print_r($a[0]);
          $p[0]=new Professor("Matematica",1200);
          $p[0]->setNome("Paulino");
          $p[0]->setIdade(39);
          $p[0]->setSexo("M");
          $p[0]->receberAm(200);
          print_r($p[0]);
          
          $v[0]=new Visitante("Alucreuza",100,"Emafrodita");
          print_r($v[0]);
          
          $b[0]= new Bolsista(12.4);
          $b[0]->setNome("Ismael");
          $b[0]->setIdade(17);
          $b[0]->setMatricula(122);
          $b[0]->setCurso("Php avançado");
          $b[0]->setSexo("M");
          print_r($b[0]);
          
          $t[0]=new Tecnico("Informatica");
          $t[0]->setNome("Pedro");
          $t[0]->setIdade(15);
          $t[0]->setMatricula(128);
          $t[0]->setCurso("Python");
          $t[0]->setSexo("M");
          print_r($t[0]);
          
      
        ?>
        </pre>
    </body>
</html>
