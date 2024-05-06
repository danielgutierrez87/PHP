<?php

    include "Classes/Faturamento.php";
    include "Classes/Cliente.php";
    include "Classes/Endereco.php";
    include "Classes/Pedido.php";
    include "Classes/ItemDoPedido.php";
    include "Classes/Pizza.php";
    include "Classes/Refri.php";
    include "Classes/Batatinha.php";
    include "Classes/Cerveja.php";
    include "Classes/Avaliacao.php";

    $tamanhoPizza = $_POST['tpizza'];
    $saborPizza = $_POST['spizza'];
    $bordaPizza = $_POST['borda'];
    $tamanhoBatata = $_POST['tbatatinha'];
    $tipoCerveja = $_POST['ctipo'];
    $tamanhoCerveja = $_POST['ctamanho'];
    $tamanhoRefri = $_POST['rtamanho'];
    $saborRefri = $_POST['rsabor'];
    $nome = $_POST['nome'];
    $contato = $_POST['contato'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];

    $faturamento = new Faturamento();

    $endereco = new Endereco();
    $endereco->setRua($rua);
    $endereco->setBairro($bairro);
    $endereco->setCidade($cidade);

    $cliente = new Cliente();
    $cliente->setNome($nome);
    $cliente->setContato($contato);

    $pedido = new Pedido();
    $pedido->setDataHoraPedido(time());
    $pedido->setCliente($cliente);
    $pedido->setEndereco($endereco);
    if(isset($_POST['itemDoPedido']['pizza'])){
        $pizza = new Pizza();
        $pizza->setTamanho($tamanhoPizza);
        $pizza->setSabor($saborPizza);
        $pizza->setBorda($bordaPizza);
        $pedido->addItemDoPedido($pizza);
        $pedido->addTotal($pizza->getValor());
        $faturamento->addQtdPizzas();
        $faturamento->addPedido($pedido);
    }

    if(isset($_POST['itemDoPedido']['batatinha'])){
        $batatinha = new Batatinha();
        $batatinha->setTamanho($tamanhoBatata);
        $pedido->addItemDoPedido($batatinha);
        $pedido->addTotal($batatinha->getValor());
        $faturamento->addQtdBatatinhas();
        $faturamento->addPedido($pedido);
    }

    if(isset($_POST['itemDoPedido']['cerveja'])){
        $cerveja = new Cerveja();
        $cerveja->setTamanho($tamanhoCerveja);
        $cerveja->setTipo($tipoCerveja);
        $pedido->addItemDoPedido($cerveja);
        $pedido->addTotal($cerveja->getValor());
        $faturamento->addQtdCerveja();
        $faturamento->addPedido($pedido);
    }

    if(isset($_POST['itemDoPedido']['refri'])){
        $refri = new Refri();
        $refri->setTamanho($tamanhoRefri);
        $refri->setTipo($saborRefri);
        $pedido->addItemDoPedido($refri);
        $pedido->addTotal($refri->getvalor());
        $faturamento->addQtdRefri(); 
        $faturamento->addPedido($pedido);
    }
    $pedido->setTaxaEntrega($endereco->getBairro());
    $pedido->addTotal($pedido->getTaxaEntrega());
    $faturamento->addTotalMotoboy($pedido->getTaxaEntrega());
    $faturamento->addTotalGeral($pedido->getTotal());
    $faturamento->setTotalLiquido();
    
    echo $faturamento->imprimirRelatorio();

?>