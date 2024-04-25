<?php 
    class Cerveja extends ItemdoPedido {
        private String $tamanho; 
        private String $tipo;

        public function setTamanho(String $tamanho) {
            $this->tamanho = $tamanho;
        }
        public function getTamanho() {
            return $this->tamanho;
        }

        public function setTipo(String $tipo) {
            $this->tipo = $tipo;
        }
        public function getTipo() {
            return $this->tipo;
        }

        public function getValor(){
            if($this->tipo === "garrafa"){
                if($this->getTamanho() === "1l"){
                    return 6.50;
                } else {
                    return 4;
                }
            } elseif ($this->tipo === "latao"){
                return 2.49;
            }
        }
    }
?>