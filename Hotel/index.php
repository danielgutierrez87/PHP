<?php

include "cliente.php";

$c = new cliente();

$c->setNome("Juca Lira");
$c->setCpf("35176554810");
    if ($c->inserirCliente()) {
        echo "Pessoa inserida com sucesso. <br>";
    } else {
        echo "Erro ao inserir pessoa. <br>";
    }
    
?>