<?php

    // $connection = new PDO('sqlite:./banco.sqlite');

    header('Content-type: text/plain');
    print_r($_POST);
    exit;

    include 'Classes/Cliente.php';
    include 'Classes/Endereco.php';
    include 'Classes/Pedido.php';
    include 'Classes/Pizza.php';
    include 'Classes/Refri.php';
    include 'Classes/Batatinha.php';

    $cliente = new Cliente();
    $cliente->setNome(readline("Digite o nome: "));
    $cliente->setContato(readline("Contato: "));

    $endereco = new Endereco();
    $endereco->setRua("Rua 01");
    $endereco->setBairro("Centro");
    $endereco->setCidade("Erechim");

    $cliente->setEndereco($endereco);

    $pedido = new Pedido();
    $pedido->setCliente($cliente);

    $pizza = new Pizza();
    $pizza->setSabor('4 queijos');
    $pizza->setTamanho('Média');
    $pedido->addItem($pizza);

?>