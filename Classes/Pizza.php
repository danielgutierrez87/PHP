<?php 
    include_once 'ItemDoPedido.php';

    class Pizza extends ItemDoPedido {
        private string $sabor;
        private string $borda;
        private string $tamanho;
    
        public function getSabor(): string {
            return $this->sabor;
        }
        public function setSabor(string $sabor): void {
            $this->sabor = $sabor;
        }
    
        public function getBorda(): string {
            return $this->borda;
        }
        public function setBorda(string $borda): void {
            $this->borda = $borda;
        }
    
        public function getTamanho(): string {
            return $this->tamanho;
        }
        public function setTamanho(string $tamanho): void {
            $this->tamanho = $tamanho;
        }
    }
?>