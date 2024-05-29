<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veiculo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        class Viagem {

            public $marca, $modelo, $kmInicial, $kmFinal, $data, $litros_abastecidos, 
            $gasolinaTipo, $media, $kmPercorridos, $kmHodometro, $valor_gasto;

            public function setMarca($marca) {
                $this->marca = $marca;
            }
            public function getMarca() {
                return $this->marca;
            }

            public function setModelo($modelo) {
                $this->modelo = $modelo;
            }
            public function getModelo() {
                return $this->modelo;
            }

            public function setKmInicial($kmInicial) {
                $this->kmInicial = $kmInicial;
            }
            public function getkmInicial() {
                return $this->kmInicial;
            }

            public function setKmFinal($kmFinal) {
                $this->kmFinal = $kmFinal;
            }
            public function getKmFinal() {
                return $this->kmFinal;
            }

            public function setKmHodometro($kmHodometro) {
                $this->kmHodometro = $kmHodometro;
            }
            public function getKmHodometro() {
                return $this->kmHodometro;
            }

            public function setLitros_abastecidos($litros_abastecidos) {
                $this->litros_abastecidos = $litros_abastecidos;
            }
            public function getLitros_abastecidos() {
                return $this->litros_abastecidos;
            }

            public function setValor_gasto($valor_gasto) {
                $this->valor_gasto = $valor_gasto;
            }
            public function getValor_gasto() {
                return $this->valor_gasto;
            }

            public function setGasolinaTipo($gasolinaTipo) {
                $this->gasolinaTipo = $gasolinaTipo;
            }
            public function getGasolinaTipo() {
                return $this->gasolinaTipo;
            }

            public function imprimir() {

                $kmPercorridos = $this->getKmFinal() - $this->getkmInicial();
                $valorGasolina = $this->getLitros_abastecidos() * $this->getValor_gasto();
                $media = ($kmPercorridos) / $this->getLitros_abastecidos(); 
                echo "<h1>Cadastro: </h1>";
                echo "Marca: " . $this->getMarca() . "<br>";
                echo "Modelo: " . $this->getModelo() . "<br>";
                echo "Km Inicial: " . $this->getkmInicial() . "<br>";
                echo "Km Final: " . $this->getKmFinal() . "<br>";
                echo "Kms Hodometro: " . $this->getKmHodometro() . "<br>";
                echo "Kms Percorridos: " . $kmPercorridos . "<br>";
                echo "Litros: " . $this->getLitros_abastecidos() . "<br>";
                echo "Tipo da Gasosa: " . $this->getGasolinaTipo() . "<br>";
                echo "Preço da Gasolina: " . $this->getValor_gasto() . "<br>";
                echo "Media: " . $media . "<br>";
            }

            public function mandarProBanco() {
                //VEÍCULO
                $database = new Conexao(); //nova instancia da conexao
                $db = $database->getConnection(); //tenta conectar
                
                $sql = "INSERT INTO carro (marca, modelo, kmInicial, kmFinal) VALUES (:marca, :modelo, :kmInicial, :kmFinal)";
                try {
                    $stmt = $db->prepare($sql);

                    $stmt->bindParam(':marca', $this->marca);
                    $stmt->bindParam(':modelo', $this->modelo);
                    $stmt->bindParam(':kmInicial', $this->kmInicial);
                    $stmt->bindParam(':kmFinal', $this->kmFinal);
                    $stmt->execute();
                    return true;
                } catch(PDOExeption $e) { //if(erro==true) {echo $this->mensagem;}
                    echo "Erro ao inserir automóvel: " . $e->getMessage();
                    return false;
                }

                //ABASTECIMENTO
                $database = new Conexao(); //nova instancia da conexao
                $db = $database->getConnection(); //tenta conectar
                
                $sql = "INSERT INTO abastecimento ('data', litros_abastecidos, valor_gasto, media, cheio, kmHodometro, gasolinaTipo) 
                VALUES (:'data', :litros_abastecidos, :valor_gasto, :media, :cheio, :kmHodometro, :gasolinaTipo)";
                try {
                    $stmt = $db->prepare($sql);
        
                    $stmt->bindParam(':gasolinaTipo', $this->gasolinaTipo);
                    $stmt->bindParam(':kmPercorridos', $this->kmPercorridos);
                    $stmt->bindParam(':precoGasolina', $this->valor_gasto);
                    $stmt->bindParam(':media', $this->media);
                    $stmt->bindParam(':cheio', $this->cheio); 
                    $stmt->execute();
                    return true;
                } catch(PDOExeption $e) { //if(erro==true) {echo $this->mensagem;}
                    echo "Erro ao inserir abastecimento: " . $e->getMessage();
                    return false;
                }
            }
        }  
    ?>
</body>
</html>