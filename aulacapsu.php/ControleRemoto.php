<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador {
    private $volume;
    private $ligado;
    private $tocando;
  //Metodo construtor
  public function __construct(){
      $this->volume = 50;
      $this->ligado = false;
      $this->tocando = false;
  }
  private function getVolume() {
      return $this->volume;
  }

  private function getLigado() {
      return $this->ligado;
  }

  private function getTocando() {
      return $this->tocando;
  }

  private function setVolume($volume) {
      $this->volume = $volume;
  }

  private function setLigado($ligado) {
      $this->ligado = $ligado;
  }

  private function setTocando($tocando) {
      $this->tocando = $tocando;
  }
     public function ligar() {
        $this->setLigado(true);
    }    
    public function desligar() {
       $this->getLigado(false);
    }
   public function abrieMenu() {
       echo "<p>-----MENU-----</p>";
       echo "<br>Esta ligado?</br>".($this->getLigado()?"sim":"não");
       echo "<br>Esta tocando?</br>".($this->getTocando()?"sim":"não");
       echo "<br>Volume</br>". $this->getVolume();
       for($i=0; $i<=$this->getVolume(); $i+=10){
 echo "|";
    }
 echo "<br>";
} 
    public function fechraMenu() {
      echo "<br>Fechar Menu!<br/>";
    } 
    public function ligarMudo() {
        if ($this->getLigado()&& $this->getVolume()>0) {
           $this->setVolume(0);  
        }
    }
    public function desligarMudo() {
      if($this->getLigado()&& $this->getVolume()== 0){
          $this->setVolume(50);
      }
    }
   public function maisVolume() {
       if($this->getLigado()){
         $this->setVolume($this->getVolume() +5);  
       } else {
           echo "<br>Erro!Não posso dar volume</br>";
       }
    }
   public function menosVolume() {
       if($this->getLigado()){
           $this->setVolume($this->getVolume()-5);  
           
       } else {
           echo "<br>Erro!Não posso baixar volume</br>";
       }
    }
   public function pause() {
       if($this->getLigado()&& $this->getTocando()){
           $this->setTocando(false);
       }
    }
   public function play() {
        if($this->getLigado()&& $this->getTocando()){
           $this->setTocando(true); 
        }
    }

}
