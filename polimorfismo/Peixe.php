<?php
require_once './Animal.php';
class Peixe extends Animal{
    private $corEscama;
    
    public function __construct($corEscama) {
        $this->corEscama = $corEscama;
    }
    public function soltarBolha(){
        echo "<p>Soltando bolhas</p>";
    }
      public function locomover(){
         echo "<p>Nadando</p>";
      }
     public function alimentar(){
         echo "<p>Comendo</p>";
     }
     public function emitirsom(){
         echo "<p>Emitir som de peixe</p>";
     }
     public function getCorEscama() {
         return $this->corEscama;
     }

     public function setCorEscama($corEscama) {
         $this->corEscama = $corEscama;
     }



}
