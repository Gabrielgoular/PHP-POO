<?php
require_once './Animal.php';
class Mamifero extends Animal {
    private $corpelo;
    public function __construct($corpelo) {
        $this->corpelo = $corpelo;
    }
    public function locomover(){
        echo "<p>Esta correndo</p>";
     }
     public function alimentar(){
         echo "<p>Esta mamando</p>";
     }
     public function emitirsom(){
         echo "<p>Som de Mamifero</p>";
     }

     public function getCorpelo() {
         return $this->corpelo;
     }

     public function setCorpelo($corpelo) {
         $this->corpelo = $corpelo;
     }


}
