<?php 
    class Batatinha extends ItemdoPedido {
        private String $tamanho; 

        public function setTamanho(String $tamanho) {
            $this->tamanho = $tamanho;
        }
        public function getTamanho() {
            return $this->tamanho;
        }

        public function getValor(){
            if($this->tamanho === "grande"){
                return 15;
            } elseif ($this->tamanho === "medio") {
                return 10;
            } elseif ($this->tamanho === "pequeno") {
                return 5;
            }
        }
    }
?>