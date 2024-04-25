<?php 
    class ItemdoPedido {
        private String $tipo;
        private String $sabor;
        
        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo(String $tipo){
            $this->tipo = $tipo;
        }

        public function getSabor(){
            return $this->sabor;
        }

        public function setSabor(String $sabor){
            $this->sabor = $sabor;
        }

        public function getValor(){
            if($this->tipo === "especial"){
                return 50;
            } elseif ($this->tipo === "tradicional"){
                return 40;
            }
        }
    }
?>