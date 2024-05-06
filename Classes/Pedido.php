<?php 
    class Pedido {
        private float $total;
        private float $taxaEntrega;
        private int $dataHoraPedido;
        private Cliente $cliente;
        private array $itensDoPedido;
    
        public function __construct() {
            $this->setDataHoraPedido(time());
        }
    
        public function getDataHoraPedido(): string {
            return $this->dataHoraPedido;
        }
        public function setDataHoraPedido(string $dataHoraPedido): void {
            $this->dataHoraPedido = $dataHoraPedido;
        }
    
        public function getCliente(): Cliente {
            return $this->cliente;
        }
        public function setCliente(Cliente $cliente): void {
            $this->cliente = $cliente;
        }
    
        public function getItens(): array {
            return $this->itensDoPedido;
        }
        public function setItens(array $itensDoPedido): void {
            $this->itensDoPedido = $itensDoPedido;
        }
        public function addItem(ItemDoPedido $item): void {
            $this->itensDoPedido[] = $item;
            $this->setTotal($item->getValor());
        }
    
        public function getTotal(): float {
            return $this->total;
        }
        public function setTotal(float $total): void {
            $this->total = $total;
        }
    
        public function getTaxaEntrega(): float {
            return $this->taxaEntrega;
        }
        public function setTaxaEntrega(float $taxaEntrega): void {
            $this->taxaEntrega = $taxaEntrega;
        }
    }
?>