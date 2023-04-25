<?php
require_once 'Lutador.php';
class Luta {
    private $desafiado;
    private $desafiante;
    private $roudes;
    private $aprovado;
    //metodos 
    public function marcarLuta($l1, $l2){
        if($l1->getCategoria()===$l2->getCategoria()
                && ($l1 != $l2)){
            $this->aprovado = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovado = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    public function lutar() {
       if($this->aprovado){
           $this->desafiado ->apresentar();
           $this->desafiante ->apresentar();
           $vencedor= rand(0,2);
           switch ($vencedor){
               case 0:
                   echo "<p>Empate!</p>";
                   $this->desafiado->empatarLuta();
                   $this->desafiante->empatarLuta();
                   break;
               case 1:
                   echo "<p>".$this->desafiado->getNome()."Vencedor</p>";
                   $this->desafiado ->ganharLuta();
                   $this->desafiante->perderLuta();
                   break;
               case 2:
                   echo "<p>".$this->desafiante->getNome()."Vencedpr!</p>";
                   $this->desafiante->ganharLuta();
                   $this->desafiado->perderLuta();
                   break;
           }
       } else {
           echo "<p>Luta não pode acontecer</p>";   
       } 
    }
    //metodos especiais
    public function getDesafiado() {
        return $this->desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function getRoudes() {
        return $this->roudes;
    }

    public function getAprovado() {
        return $this->aprovado;
    }

    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    public function setRoudes($roudes) {
        $this->roudes = $roudes;
    }

    public function setAprovado($aprovado) {
        $this->aprovado = $aprovado;
    }


}
