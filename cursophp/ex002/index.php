<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>EXEMPLO DE PHP</h1>
    <p>Como puxar data e hora:</p>
    <br>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); /* para puxar o horario da maquina e não do servidor */
        echo "Hoje é dia " . date("d/M/Y");
        echo " e a hora atual é: " . date("G:i:s");
    ?>
</body>
</html>