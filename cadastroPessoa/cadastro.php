<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    
    <h1>Cadastro de Pessoa</h1>
    <?php

    include "pessoa.class.php";
    $pes = new Pessoa();

    // Pegar informações do formulário

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["nascimento"];
    $telefone = $_POST["telefone"];
    $hora = $_POST["hora"];
    $site = $_POST["site"];
    $senha = $_POST["senha"];
    $cor = $_POST["cor"];
    $filhos = $_POST["filhos"];
    $peso = $_POST["peso"];
    $msg = $_POST["msg"];

    $pes -> setNome($nome);
    $pes -> setEmail($email);
    $pes -> setIdade($idade);
    $pes -> setTelefone($telefone);
    $pes -> setHora($hora);
    $pes -> setSite($site);
    $pes -> setSenha($senha);
    $pes -> setCor($cor);
    $pes -> setFilhos($filhos);
    $pes -> setPeso($peso);
    $pes -> setMsg($msg);
    $pes -> monstrarDados();
    ?>

    <button onclick="javascript:history.go(-1)">Voltar</button>
</body>
</html>