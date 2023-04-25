<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sobreposição e por Sobrecarga!</title>
    </head>
    <body>
        <pre>
        <?php
        require_once './Avez.php';
        require_once './Mamifero.php';
        require_once './Peixe.php';
        require_once './Reptil.php';
        require_once './Arara.php';
        require_once './Cachorro.php';
        require_once './Canguru.php';
        require_once './Cobra.php';
        require_once './Cobra.php';
        require_once './Tartaruga.php';
        require_once './Lobo.php';
        $a=new Avez("Azul");
        $a->setIdade(2);
        $a->setMembros(4);
        $a->setPeso(1.5);
        $a->fazerNinho();
        $a->locomover();
        print_r($a);
        
        $m=new Mamifero("Preto");
        $m->setIdade(5);
        $m->setMembros(5);
        $m->setPeso(29);
        $m->emitirsom();
        print_r($m);
        
        $r=new Reptil("cinza");
        $r->setIdade(1);
        $r->setMembros(5);
        $r->setPeso(12);
        $r->emitirsom();
        $r->alimentar();
        print_r($r);
        
        $p=new Peixe("Transparente");
        $p->setIdade(05);
        $p->setMembros(3);
        $p->setPeso(50);
        $p->emitirsom();
        $p->alimentar();
        print_r($p);
        
        $c=new Cachorro("Branco");
        $c->setIdade(7);
        $c->setMembros(5);
        $c->setPeso(15);
        $c->emitirsom();
        $c->abanarRabo();
        $c->enterrarOsso();
        $c->reagirHM(19);
        $c->reagirD(false);
        $c->reagirI(2,9);
        print_r($c);
         
        $ca=new Canguru("Amarelo queimado");
        $ca->setIdade(2);
        $ca->setMembros(5);
        $ca->setPeso(40);
        $ca->emitirsom();
        $ca->alimentar();
        $ca->locomover();
        print_r($ca);
        
        $l=new Lobo("Azul");
        $l->setIdade(5);
        $l->setMembros(5);
        $l->setPeso(29);
        $l->emitirsom();
        print_r($l);
        ?>
        </pre >
    </body>
</html>
