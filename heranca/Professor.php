<?php
require_once './Pessoa.php';
class Professor extends Pessoa {
    private $especia;
    private $salario;
    public function __construct($especia, $salario) {
        $this->especia = $especia;
        $this->salario = $salario;
    }
    public function receberAum($aum){
        $this->salario +=$aum;
    }

    public function getEspecia() {
        return $this->especia;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecia($especia) {
        $this->especia = $especia;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }


}
