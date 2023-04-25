<?php
class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;


    public function apresentar(){
        echo "<p>-------------------------------------</p>";
        echo "<p>Chegou a hora!O luador " . $this->getNome();
        echo " Venho diretamente de ". $this->getNacionalidade();
        echo " Tem ".$this->getIdade() ." anos e pesa ". $this->getPeso() ."Kl";
        echo "<br>Ele tem ".$this->getVitorias() ." vitorias ";
        echo $this->getDerrotas() ." derrotas ". $this->getEmpates() ." empates";
    }
    public function status() {
        echo "<p>--------------------------------------</p>";
        echo "<p>".$this->getNome()." é um peso ".$this->getCategoria();
        echo "<p>e ja ganhou ".$this->getVitorias()." vezes";
            if($this->getDerrotas()<=1){
              echo "<p>perdeu ".$this->getDerrotas()." vez";   
            } else {
              echo "<p>perdeu ".$this->getDerrotas()." vezes";   
            }
        if($this->getEmpates()<= 1){
        echo "<p>empatou ".$this->getEmpates()." vez";
        } else {
         echo "<p>empatou ".$this->getEmpates()." vezes";   
        }
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);  
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1); 
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() +1);
    }
    public function __construct($no,$na,$id,$al,
                                $pe,$vi,$de,$em) {
        $this->nome=$no;
        $this->nacionalidade=$na;
        $this->idade=$id;
        $this->empates=$em;
        $this->setPeso($pe);
        $this->derrotas=$de;
        $this->altura=$al;
        $this->vitorias=$vi;
    }
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function setCategoria() {
    if($this->peso<52.2){
        $this->categoria="Invalido";
    }elseif($this->peso <=70.3){
        $this->categoria = "Leve";
    }elseif ($this->peso<= 83.9) {
        $this->categoria= "Medio";    
    }elseif ($this->peso<= 120.2 ) {
        $this->categoria= "Pesado";    
     } else {
         $this->categoria = "Invalido";
     }
        
    }

    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    public function setEmpates($empates) {
        $this->empates = $empates;
    }
}
