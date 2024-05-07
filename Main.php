<?php

//echo "<pre>";
//print_r($_POST);
//exit;

require_once 'Pedido.php';
require_once 'Cliente.php';
require_once 'Pizza.php';
require_once 'ItemDoPedido.php';
require_once 'Batatinha.php';
require_once 'Cerveja.php';
require_once 'Refri.php';


// Cria o endereço do cliente
$endereco = new Endereco();
$endereco->setRua($_POST['rua']);
$endereco->setBairro($_POST['bairro']);
//$endereco->setCidade("Erechim");

// Cria o cliente e defina o endereço
$cliente = new Cliente();
$cliente->setNome($_POST['nome']);
$cliente->setEndereco($endereco);

// Cria o pedido e defina o cliente
$pedido = new Pedido();
$pedido->setCliente($cliente);

// Calcula a taxa de entrega
$pedido->calcularTaxaDeEntrega();

// Adiciona itens ao pedido

//se chegado com o checkbox executa o comando
if (isset($_POST["itensDoPedido"]['pizza'])) {
    // Loop através dos sabores selecionados
    foreach ($_POST['pizza_sabor'] as $key => $saborPizza) {
        $pizza = new Pizza();
        $pizza->setTamanho($_POST['pizza_tamanho'][$key]);
        $pizza->setSabor($saborPizza);
        $pizza->setBorda($_POST['pizza_borda'][$key]);

        $descricao = "Pizza: " . $pizza->getTamanho() . " " . $saborPizza . " Borda " . $pizza->getBorda();
        $pizza->setDescricao($descricao);
        $pedido->addItemDoPedidoPizza($pizza)
    }
}
if (isset($_POST["itensDoPedido"]["batata"])) {
    foreach ($_POST['batata_sabor'] as $key => $saborBatata) {
        $batatinha = new Batatinha();
        $batatinha->setSabor($saborBatata);
        $batatinha->setTamanho($_POST['batata_tamanho'][$key]);
        $batatinha->setDescricao("Batata" . " " . $batatinha->getTamanho() . " " . $saborBatata);
        $pedido->addItemDoPedidoBatata($batatinha);
    }
}
if (isset($_POST["itensDoPedido"]["cerveja"])) {
    foreach ($_POST['cerveja_tipo'] as $key => $cervejaTipo) {
        $cerveja = new Cerveja();
        $cerveja->setTipo($cervejaTipo);
        $cerveja->setTamanho($_POST["cerveja_tamanho"][$key]);
        $cerveja->setDescricao("Cerveja:" . $cervejaTipo . " " . $cerveja->getTamanho());
        $pedido->addItemDoPedidoCerveja($cerveja);
    }
}
if (isset($_POST["itensDoPedido"]["refrigerante"])) {
    foreach ($_POST['refrigerante_tipo'] as $key => $refrigeranteTipo) {
        $refrigerante = new Refri();
        $refrigerante->setTipo($refrigeranteTipo);
        $refrigerante->setTamanho($_POST["refri_tamanho"][$key]);
        $refrigerante->setDescricao('Refrigerante: ' . $refrigeranteTipo . " " . $refrigerante->getTamanho());
        $pedido->addItemDoPedidoRefri($refrigerante);
    }
}
$pedido->calcularTotal();
//$endereco->inserirEndereco();
$pedido->imprimir();

?>