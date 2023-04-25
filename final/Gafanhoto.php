<?php
require_once './Pessoa.php';
class Gafanhoto extends Pessoa{
    private $login;
    private $totAssistindo;
        
    public function __construct($sexo, $nome, $idade,$login) {
        parent::__construct($nome,$idade,$sexo);
        $this->login = $login;
        $this->totAssistindo = 0;
    }
     public function vouMaisUm() {
         $this->totAssistindo ++;
     }
     public function getLogin() {
         return $this->login;
     }

     public function getTotAssistindo() {
         return $this->totAssistindo;
     }

     public function setLogin($login) {
         $this->login = $login;
     }

     public function setTotAssistindo($totAssistindo) {
         $this->totAssistindo = $totAssistindo;
     }


}
