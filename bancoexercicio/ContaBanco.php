<?php


class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    public function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "cc"){
            $this->setSaldo(50);
        } elseif ($t =="cp") {
            $this->setSaldo(150);
        }
    }
    public function fecharConta(){
        if ($this->getSaldo() > 0) {
            echo "<p>Conta ainda tem dinheiro, não posso fecha-la! do ".$this->getDono()."</p>";
        }elseif ($this->getSaldo() < 0) {
            echo "<p>Conta esta em debito. Impossivel encerrar!do ".$this->getDono()."</p>";    
        } else {
            $this->setStatus(false);
            echo "<p>Conta de ".$this->getDono()." Encerada com sucesso!</p>";
        }   
        
    }
    public function deposito($v) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Deposito de $v na conta de ".$this->getDono()."</p>";
        }
    }
    public function sacar($v) {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $v){
               $this->setSaldo($this->getSaldo() - $v); 
               echo "<p>Saque de $v altorizado na conta de ".$this->getDono()."</p>";
            } else {
                echo "<p>Saldo menor que valor de saque!</p>";
            }
        } else {
            echo "<p>Não pode sacar de uma conta fechada</p>";
        }
    }
    public function saldo() {
        if($this->getStatus()){
           $this->setSaldo($this->getSaldo());
           echo "<p>Saldo ".$this->getSaldo()." na conta ".$this->getDono()."</p>";
        }
    }
    public function pagarMencal() {
     if($this->getTipo() == "cc"){
         $v= 12;
     }elseif ($this->getTipo() == "cp") {
         $v=20;   
        }if($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de R$ $v debitada na conta de ".$this->getDono()."</p>";
        } else {
            echo "<p>Problema com a conta</p>";
        }
    
    }
    public function __construct() {
                $this->setSaldo(0);
               $this->setStatus(false);
               echo "<p>Conta criada com sucesso! </p>";
    }
    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
     
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setDono($dono) {
        $this->dono = $dono;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function setStatus($status) {
        $this->status = $status;
    }


}
