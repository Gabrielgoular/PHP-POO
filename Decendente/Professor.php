<?php

require_once './Pessoa.php';
class Professor extends Pessoa{
    private $especialidade;
    private $salario;
    
    public function __construct($especialidade, $salario) {
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }
    public function receberAm($aumento){
        $this->setSalario($this->getSalario() + $aumento);
    }
    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }


}
