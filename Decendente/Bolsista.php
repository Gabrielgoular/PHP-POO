<?php
require_once './Aluno.php';
class Bolsista extends Aluno {
   private $bolsa;
   
   public function __construct($bolsa) {
       $this->bolsa = $bolsa;
   }
   public function renovarBolsa(){
       echo "<p>Bolsa renovada com suceso!</p>";
   }
    public function pagarMesalidade(){
      echo $this->getNome()."<p>Mensalidade paga com desconto</p>";
  }
  public function getBolsa() {
      return $this->bolsa;
  }

  public function setBolsa($bolsa) {
      $this->bolsa = $bolsa;
  }


   

}
