<?php 
    include "viajante.php";

    $p = new Pessoas_banco();

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    
    $p->setNome($nome);
    $p->setEmail($email);
    $p->setIdade($idade);
        if ($p->inserirPessoa()) {
            echo "Pessoa inserida com sucesso. <br>";
        } else {
            echo "Erro ao inserir pessoa. <br>";
        }
?>