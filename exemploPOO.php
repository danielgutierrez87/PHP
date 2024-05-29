<?php

include "pessoa.class.php";

// Nova instância de Pessoa

$p = new Pessoa("Pedro");

$idade = 25;
// Setar o atributo idade utilizando o método set
$p->setIdade($idade);

// Ler valores com os getters
echo "Pessoa: " . $p->getNome() . " <br> Idade: " . $p->getIdade();

$p->setNome("João");
echo "<br>" . $p->monstrarDados();

?>