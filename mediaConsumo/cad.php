<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média de consumo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Controle de Abastecimento</h1>
    <?php

    include "viajante.php";
    $v = new Viajante();

    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $motor = $_POST["motor"];
    $kmInicial = $_POST["kmini"];
    $kmFinal = $_POST["kmfim"];
    $totLitros = $_POST["totlitros"];
    $combustivel = $_POST["combustivel"];

    $v -> setMarca($marca);
    $v -> setModelo($modelo);
    $v -> setMotor($motor);
    $v -> setKmInicial($kmInicial);
    $v -> setKmFinal($kmFinal);
    $v -> setTotLitros($totLitros);
    $v -> setCombustivel($combustivel);
    $v -> status();
    $v -> media();

    ?>
  
    <button onclick="javascript:history.go(-1)">Voltar</button>

</body>
</html>








