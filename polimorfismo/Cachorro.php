<?php
require_once './Lobo.php';
class Cachorro extends Lobo {
    public function enterrarOsso(){
        echo "<p>Enterando o osso</p>";
    }
    public function abanarRabo(){
        echo "<p>Abanando o Rabo</p>";
    }
    public function emitirsom(){
         echo "<p>AU!AU!AU!</p>";
     }
     public function reagirF($frase){
         if($frase == "Toma comida" || $frase == "Ola"){
            echo"<p>Abanar e latir</p>"; 
         }else{
             echo"<p>Rosnar</p>"; 
     }
     }
     public function reagirHM($hora){
         if($hora <=12){
             echo "<p>Abanar</p>";
         }elseif ($hora >=18) {
            echo "<p>Ignorar</p>";
        } else {
            echo "<p>Abanar e Latir</p>";
        }
     }
     public function reagirD($dono){
        if($dono){
            echo "<p>Abanar</p>";
        } else {
            echo "<p>Rosnar</p>";    
        } 
     }
     public function reagirI($idade, $peso){
     if($idade< 5 ){
         if ($peso < 10) {
             echo "<p>Abanar</p>";
         } else {
            echo "<p>Latir</p>";
         }     
      } else {
          if($peso <10){
            echo "<p>Rosnar</p>";  
          } else {
            echo "<p>Ignorar</p>";
          }
      }
     }
}
