<?php 
    class Pizza extends ItemdoPedido {
        private String $tamanho;
        private String $sabor;
        private String $borda;

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

        public function setBorda(String $borda) {
            $this->borda = $borda;
        }
        public function getBorda() {
            return $this->borda;
        }

        public function getValor(){
            if($this->tamanho === "g"){
                if(empty($this->borda)){
                    return 50;
                } else {
                    return 55;
                }
            } elseif ($this->tamanho === "m"){
                if(empty($this->borda)){
                    return 40;
                } else {
                    return 45;
                }
            }
        }
    }
?>