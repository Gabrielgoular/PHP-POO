<?php
require_once './Animal.php';
class Avez extends Animal{
    private $corPena;
    
    public function __construct($corPena) {
        $this->corPena = $corPena;
    }
    public function fazerNinho(){
        echo "<p>Fazendo um ninho</p>";
    }
      public function locomover(){
          echo "<p>Voando</p>";
     }
     public function alimentar(){
         echo "<p>Comendo</p>";
     }
     public function emitirsom(){
         echo "<p>Cantando</p>";
     }
     public function getCorPena() {
         return $this->corPena;
     }

     public function setCorPena($corPena) {
         $this->corPena = $corPena;
     }


}
