<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $n = $_GET["nome"]; // nome vem do name e não do id do input
            $s = $_GET["sobrenome"]; // idem
            echo "É um prazer te conhecer, $n $s! Este é meu site.";
        ?>
        
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>