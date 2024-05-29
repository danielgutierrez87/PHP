<?php 

include "Pessoas_banco.php";

$p = new Pessoas_banco();

$p->setNome("Juca Lira");
$p->setEmail("juca@gmail.com");
$p->setIdade(56);
    if ($p->inserirPessoa()) {
        echo "Pessoa inserida com sucesso. <br>";
    } else {
        echo "Erro ao inserir pessoa. <br>";
    }

$pessoas = $p->listarPessoa(); 
    foreach ($pessoas as $pessoa) {
        echo "Código: " . $pessoa['id_pessoa'] . "<br>";
        echo "Nome: " . $pessoa['nome'] . "<br>";
        echo "Email: " . $pessoa['email'] . "<br>";
        echo "Idade: " . $pessoa['idade'] . "<p><hr>";
    }
?>