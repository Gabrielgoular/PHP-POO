<?php
require_once './Aluno.php';
class Tecnico extends Aluno {
    private $registroPro;
    
    public function __construct($registroPro) {
        $this->registroPro = $registroPro;
    }
    public function praticar(){
        echo $this->getNome()."<p>Esta fazendo a pratica de php</p>";
    }
    public function getRegistroPro() {
        return $this->registroPro;
    }

    public function setRegistroPro($registroPro) {
        $this->registroPro = $registroPro;
    }

 
}
