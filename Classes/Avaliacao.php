<?php 
    class Avaliacao {
        private $nota;
        private $observacao;
        public function setNota($nota){
           $this->nota = $nota;
        }
        public function getNota(){
           return $this->nota;
        }   
    }
?>