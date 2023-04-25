<?php

 abstract class Animal {
     protected $peso;
     protected $idade;
     protected $membros;
     
     public function __construct($peso, $idade, $memros) {
         $this->peso = $peso;
         $this->idade = $idade;
         $this->membros = $memros;
     }
     public function locomover(){
         
     }
     public function alimentar(){
         
     }
     public function emitirsom(){
         
     }
     public function getPeso() {
         return $this->peso;
     }

     public function getIdade() {
         return $this->idade;
     }

     public function getMemros() {
         return $this->memros;
     }

     public function setPeso($peso) {
         $this->peso = $peso;
     }

     public function setIdade($idade) {
         $this->idade = $idade;
     }

     public function setMembros($memros) {
         $this->membros = $memros;
     }


}
