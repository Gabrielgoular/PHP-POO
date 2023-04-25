<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once './Gafanhoto.php';
        require_once './Video.php';
        require_once './AcoesVideo.php';
        require_once './Visualizacao.php';
        
        $v[0]=new Video("Aula 1 de POO");
        $v[1]=new Video("Aula 12 de PHP");
        $v[2]=new Video("Aula 15 de HTML");
        $v[3]=new Video("Curso Java");
        print_r($v[0]);
        print_r($v[1]);
        print_r($v[2]);
        print_r($v[3]);
        $g[0]=new Gafanhoto("M","Saldanha",29, 1111);
        print_r($g[0]);
        $g[1]=new Gafanhoto("F","Roberta","21","teta");
        print_r($g[1]);
        $g[2]=new Gafanhoto("F","Tania",17,"Reta");
        print_r($g[2]);
        $g[3]=new Gafanhoto("M","Paulo",12,"Constantinopla");
        print_r($g[3]);
        $vis[0]= new Visualizacao($g[0],$v[2]);
        $vis[1]=new Visualizacao($g[0], $v[0]);
        $vis[0]->avaliar();
        $vis[1]->avaliarPorc(85);
        print_r($vis);
        
        
        
        ?>
        </pre>
    </body>
</html>
