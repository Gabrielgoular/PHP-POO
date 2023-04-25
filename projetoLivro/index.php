<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once './Pessoa.php';
            require_once './Livro.php';
            
            $p[0]=new Pessoa("Jão",23,"M");
            $p[1]=new Pessoa("Marilis",32,"F");
            
            $l[0]=new Livro("Php basico","Jose da silva", 300, $p[0]);
            $l[1]=new Livro("Poo php","Ana", 500, $p[0]);
            $l[2]=new Livro("PHP avancado", "Irineu", 800, $p[1]);
            
            $l[0]->abrir();
            $l[0]->folhar(80);
            $l[0]->avancarPag();
            $l[0]->detalhes();
            
            $l[2]->abrir();
            $l[2]->folhar(80);
            $l[2]->avancarPag();
            $l[2]->detalhes();
        ?>
        </pre>
    </body>
</html>
