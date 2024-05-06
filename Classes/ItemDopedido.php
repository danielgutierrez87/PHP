<?php 
    class ItemDoPedido {
        private float $valor;
        private string $descricao;
    
        public function __construct() {
            $this->setValor(0.0);
        }
    
        public function getValor(): float {
            return $this->valor;
        }
        public function setValor(float $valor): void {
            $this->valor = $valor;
        }
    
        public function getDescricao(): string {
            return $this->descricao;
        }
        public function setDescricao(string $descricao): void {
            $this->descricao = $descricao;
        }
    }
?>