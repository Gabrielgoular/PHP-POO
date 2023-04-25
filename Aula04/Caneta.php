<?php

class Caneta {
    private $modelo;
    private $ponta;
    private $tampada;
    private $cor;


    public function __construct($modelo, $ponta, $tampada, $cor) {
        $this->modelo = $modelo;
        $this->ponta = $ponta;
        $this->tampada = $tampada;
        $this->cor = $cor;
    }
    public function getModelo() {
        return $this->modelo;
    }

    public function getPonta() {
        return $this->ponta;
    }

    public function getTampada() {
        return $this->tampada;
    }

    public function getCor() {
        return $this->cor;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setPonta($ponta) {
        $this->ponta = $ponta;
    }

    public function setTampada($tampada) {
        $this->tampada = $tampada;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }





}
