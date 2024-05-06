<?php 
    class Faturamento {
    private $data;
    private $qtdPizzas = 0;
    private $qtdBatatinhas = 0;
    private $qtdCerveja = 0;
    private $qtdRefri = 0;
    private $pedido = [];
    private $totalGeral = 0;
    private $totalMotoboy = 0;
    private $totalLiquido = 0;

    private $formatar;

    public function getQtdPizzas(){
        return $this->qtdPizzas;
    }

    public function addQtdPizzas(){
        $this->qtdPizzas++;
    }

    public function getQtdBatatinhas(){
        return $this->qtdBatatinhas;
    }

    public function addQtdBatatinhas(){
        $this->qtdBatatinhas++;
    }

    public function getQtdCerveja(){
        return $this->qtdCerveja;
    }

    public function addQtdCerveja(){
        $this->qtdCerveja++;
    }

    public function getQtdRefrigerante(){
        return $this->qtdRefri;
    }

    public function addQtdRefrigerante(){
        $this->qtdRefri++;
    }

    public function addPedido($pedido){
        $this->pedido[] = $pedido;
    }

    public function getTotalGeral(){
        return $this->totalGeral;
    }

    public function addTotalGeral($totalGeral){
        $this->totalGeral += $totalGeral;
    }

    public function getTotalMotoboy(){
        return $this->totalMotoboy;
    }

    public function addTotalMotoboy($totalMotoboy){
        $this->totalMotoboy += $totalMotoboy;
    }

    public function getTotalLiquido(){
        return $this->totalLiquido;
    }

    public function setTotalLiquido(){
        $this->totalLiquido = $this->totalGeral - $this->totalMotoboy;
    }

    public function imprimirRelatorio(){
        
    }

    public function imprimirPedido($n){
        $this->pedido[$n-1]->imprimir($n);
    }
}
?>