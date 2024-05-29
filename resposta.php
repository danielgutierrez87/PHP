<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
    </head>
<body>
    
    <h1>Cadastro de Pessoa</h1>
    <?php

    // Pegar informações do formulário

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    ?>

        <label for="nome">Nome:</label> <?php echo $nome; ?>
        <br>
        <label for="email">E-mail:</label> <?php echo $email; ?>
        <br>
        <label for="idade">Idade:</label> <?php echo $idade; ?>
        <br>

</body>
</html>

