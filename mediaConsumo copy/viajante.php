<?php

include "conexão.php";

class Carro {


private $modelo;
private $motor;
private $kmInicial;
private $kmFinal;
private $totLitros;
private $combustivel;

    
     public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    public function getModelo() {
        return $this->modelo;
    }

    public function setMotor($motor) {
        $this->motor = $motor;
    }
    public function getMotor() {
        return $this->motor;
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
    public function getkmFinal() {
        return $this->kmFinal;
    }

    public function setTotLitros($totLitros) {
        $this->totLitros = $totLitros;
    }
    public function getTotLitros() {
        return $this->totLitros;
    }

    public function setCombustivel($combustivel) {
        $this->combustivel = $combustivel;
    }
    public function getCombustivel() {
        return $this->combustivel;
    }

    public function status() {
        echo "A marca do veículo é " . $this->marca . "!<br>"; 
        echo "O modelo é:" . $this->modelo . ".<br>";
        echo "A motorização é: " . $this->motor . ".<br>"; 
        echo "A km inicial da viajem foi de: " . $this->kmInicial . ".<br>"; 
        echo "A km final da viajem foi de " . $this->kmFinal . ".<br>"; 
        echo "O consumo de combustível foi de " . $this->totLitros . " litros.<br>"; 
        echo "O combustível usado foi:  " . $this->combustivel . ".<br>";
    }

    public function media() {
        $m = ($this->kmFinal - $this->kmInicial) / $this->totLitros;

        echo "A média de km/l do carro foi de: " . $m; 
    }

    function listarViajante() {
        $database = new Conexao();
        $db = $database->getConnection();
        $sql = "SELECT * from pessoa";
            try {
                $stmt = $db->query($sql);
                $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
                return $result;
            } catch(PDOException $e) {
                echo 'Erro ao listar pessoas: ' . $e -> getMessage();
                $result = [];
                return $result;
            }
    }

    function inserirPessoa() {
        $database = new Conexao();
        $db = $database->getConnection();
        $sql = "INSERT INTO pessoa (nome, email, idade) VALUES (:nome, :email, :idade)";

        try {
            $stmt = $db->prepare($sql);
            $stmt -> bindParam (':nome', $this->nome);
            $stmt -> bindParam (':email', $this->email);
            $stmt -> bindParam (':idade', $this->idade);
            $stmt -> execute();
            return true;
        } catch (PDOException $e){
            echo "Erro ao inserir pessoa: " . $e -> getMessage();
            return false;
        }
    }

    function excluirPessoa() {
        $database = new Conexao();
        $db = $database->getConnection();
        $sql = "DELETE FROM pessoa WHERE id_pessoa =:id_pessoa";

        try {
            $stmt = $db->prepare($sql);
            $stmt -> bindParam (':id_pessoa', $this->id_pessoa);
            $stmt -> execute();
            return true;
        } catch (PDOException $e){
            echo "Erro ao excluir pessoa: " . $e -> getMessage();
            return false;
        }
    }

    function atualizarRegistro() {
        $database = new Conexao();
        $db = $database->getConnection();
        $sql = "UPDATE pessoa SET nome = :nome, email = :email, idade = :idade WHERE id_pessoa = :id_pessoa";

        try {
            $stmt = $db->prepare($sql);
            $stmt -> bindParam (':id_pessoa', $this->id_pessoa);
            $stmt -> bindParam (':nome', $this->nome);
            $stmt -> bindParam (':email', $this->email);
            $stmt -> bindParam (':idade', $this->idade);
            $stmt -> execute();
            return true;
        } catch (PDOException $e){
            echo "Erro ao atualizar registro: " . $e -> getMessage();
            return false;
        }
    }

}

?> 