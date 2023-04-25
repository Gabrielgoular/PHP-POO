<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{
   private $titulo;
   private $autor;
   private $totPaginas;
   private $pagAtual;
   private $aberto;
   private $leitor;
   
   public function detalhes(){
       
   }
   public function __construct($titulo, $autor, $totPaginas, $leitor) {
       $this->titulo = $titulo;
       $this->autor = $autor;
       $this->totPaginas = $totPaginas;
       $this->leitor = $leitor;
   }

   public function getTitulo() {
       return $this->titulo;
   }

   public function getAutor() {
       return $this->autor;
   }

   public function getTotPaginas() {
       return $this->totPaginas;
   }

   public function getPagAtual() {
       return $this->pagAtual;
   }

   public function getAberto() {
       return $this->aberto;
   }

   public function getLeitor() {
       return $this->leitor;
   }

   public function setTitulo($titulo) {
       $this->titulo = $titulo;
   }

   public function setAutor($autor) {
       $this->autor = $autor;
   }

   public function setTotPaginas($totPaginas) {
       $this->totPaginas = $totPaginas;
   }

   public function setPagAtual($pagAtual) {
       $this->pagAtual = $pagAtual;
   }

   public function setAberto($aberto) {
       $this->aberto = $aberto;
   }

   public function setLeitor($leitor) {
       $this->leitor = $leitor;
   }

    public function abrir() {
        $this->aberto = true;
    }

    public function avancarPag($a) {
        if($a > $this->totPaginas){
            $this->pagAtual = 0;
        } else {
            $this->pagAtual ++;
        }
         
    }

    public function fechar() {
        $this->aberto = false; 
    }

    public function folhar($p) {
        if($p > $this->totPaginas){
           $this->pagAtual=0; 
        } else {
            $this->pagAtual= $p;
        }
    }

    public function voltarPag($v) {
        if($v< $this->totPaginas){
            $this->pagAtual = 0;
        } else {
            $this->pagAtual --;
        }
        
    }

}
