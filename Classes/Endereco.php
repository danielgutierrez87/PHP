<?php 
    class Endereco {
        private string $rua;
        private string $bairro;
        private string $cidade;
    
        public function getRua(): string {
            return $this->rua;
        }
        public function setRua(string $rua): void {
            $this->rua = $rua;
        }
    
        public function getBairro(): string {
            return $this->bairro;
        }
        public function setBairro(string $bairro): void {
            $this->bairro = $bairro;
        }
    
        public function getCidade(): string {
            return $this->cidade;
        }
        public function setCidade(string $cidade): void {
            $this->cidade = $cidade;
        }
    }
?>