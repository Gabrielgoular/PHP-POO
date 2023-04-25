<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Caixa eletrônico</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'ContaBanco.php';
            $p1 = new ContaBanco();//Jubileu
            $p2 = new ContaBanco();//Creusa
            $p1 ->abrirConta("cc");
            $p1->setnumConta(2222);
            $p1->setDono("Jubileu");
            $p1->deposito(300);
            $p2->abrirConta("cp");
            $p2->setnumConta(1111);
            $p2->setDono("Creusa");
            $p2->deposito(500);
            $p1->deposito(500);
            $p2->sacar(550);
            $p2->saldo();
            $p1->pagarMencal();
            $p2->pagarMencal();
            $p1->fecharConta();
            $p2->sacar(80); 
            $p2->fecharConta();
            $p2->saldo();
            print_r($p1);
            print_r($p2);
        ?>
        </pre>
    </body>
</html>
