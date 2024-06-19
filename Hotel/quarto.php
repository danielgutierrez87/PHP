<?php

include "Conexao.php";

class quarto {

    private $id_quarto;
    private $configuracao;
    private $status = true;

    function setId_quarto($id_quarto) {
        $this->id_quarto = $id_quarto;
    }
    function getId_quarto() {
        return $this->id_quarto;
    }

    function setConfiguracao($configuracao) {
        $this->configuracao = $configuracao;
    }
    function getConfiguracao() {
        return $this->configuracao;
    }

    function setStatus($status) {
        $this->status = $status;
    }
    function getStatus() {
        return $this->status;
    }

    function listarQuarto() {
        $database = new Conexao();
        $db = $database->getConnection();
        $sql = "SELECT * from quarto";
            try {
                $stmt = $db->query($sql);
                $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
                return $result;
            } catch(PDOException $e) {
                echo 'Erro ao listar quartos: ' . $e -> getMessage();
                $result = [];
                return $result;
            }
    }

    function inserirQuarto() {
        $database = new Conexao();
        $db = $database->getConnection();
        $sql = "INSERT INTO quarto (Configuracao, `Status`) VALUES (?, ?)";

        try {
            $stmt = $db->prepare($sql);
            $stmt -> bindParam (1, $this->configuracao);
            $stmt -> bindParam (2, $this->status);
            $stmt -> execute();
            return true;
        } catch (PDOException $e){
            echo "Erro ao inserir quarto: " . $e -> getMessage();
            return false;
        }
    }

    function excluirQuarto() {
        $database = new Conexao();
        $db = $database->getConnection();
        $sql = "DELETE FROM quarto WHERE ID_Quarto =:ID_Quarto";

        try {
            $stmt = $db->prepare($sql);
            $stmt -> bindParam (':ID_Cliente', $this->id_quarto);
            $stmt -> execute();
            return true;
        } catch (PDOException $e){
            echo "Erro ao excluir quarto: " . $e -> getMessage();
            return false;
        }
    }

    function atualizarRegistro() {
        $database = new Conexao();
        $db = $database->getConnection();
        $sql = "UPDATE quarto SET Configuracao = :Configuracao, `Status` = :`Status` WHERE ID_Quarto = :ID_Quarto";

        try {
            $stmt = $db->prepare($sql);
            $stmt -> bindParam (':id_pessoa', $this->id_quarto);
            $stmt -> bindParam (':nome', $this->configuracao);
            $stmt -> bindParam (':email', $this->status);
            $stmt -> execute();
            return true;
        } catch (PDOException $e){
            echo "Erro ao atualizar registro: " . $e -> getMessage();
            return false;
        }
    }
    
}

?>