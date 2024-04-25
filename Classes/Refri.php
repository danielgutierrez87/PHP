<?php 
    class Refri extends ItemdoPedido {
        private String $tamanho;
        private String $sabor; 

        public function setTamanho(String $tamanho) {
            $this->tamanho = $tamanho;
        }
        public function getTamanho() {
            return $this->tamanho;
        }

        public function setSabor(String $sabor) {
            $this->sabor = $sabor;
        }
        public function getSabor() {
            return $this->sabor;
        }

        public function getValor(){
            if($this->tamanho === "2l"){
                return 8;
            } else {
                return 5;
            }
        }
    }
?>