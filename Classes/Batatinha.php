<?php 
    
    include_once 'ItemDopedido.php';
    class Batatinha extends ItemdoPedido {
        private String $tamanho; 

        public function getTamanho(): string {
            return $this->tamanho;
        }
        public function setTamanho(string $tamanho): void {
            $this->tamanho = $tamanho;
        }
    }
?>