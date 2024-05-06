<?php 
    
    include_once 'ItemDopedido.php';
    class Cerveja extends ItemdoPedido {
        private String $tamanho; 
        private String $tipo;

        public function setTamanho(String $tamanho) {
            $this->tamanho = $tamanho;
        }
        public function getTamanho() {
            return $this->tamanho;
        }

        public function getTipo(): string {
            return $this->tipo;
        }
        public function setTipo(string $tipo): void {
            $this->tipo = $tipo;
        }
    }
?>