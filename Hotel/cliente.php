<?php

include "Conexao.php";

class cliente {

    private $id_cliente;
    private $nome;
    private $cpf; 

    function setId_cliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }
    function getId_cliente() {
        return $this->id_cliente;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
    function getNome() {
        return $this->nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    function getCpf() {
        return $this->cpf;
    }

    function listarCliente() {
        $database = new Conexao();
        $db = $database->getConnection();
        $sql = "SELECT * from cliente";
            try {
                $stmt = $db->query($sql);
                $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
                return $result;
            } catch(PDOException $e) {
                echo 'Erro ao listar clientes: ' . $e -> getMessage();
                $result = [];
                return $result;
            }
    }

    function inserirCliente() {
        $database = new Conexao();
        $db = $database->getConnection();
        $sql = "INSERT INTO cliente (Nome, CPF) VALUES (?, ?)";

        try {
            $stmt = $db->prepare($sql);
            $stmt -> bindParam (1, $this->nome);
            $stmt -> bindParam (2, $this->cpf);
            $stmt -> execute();
            return true;
        } catch (PDOException $e){
            echo "Erro ao inserir clientes: " . $e -> getMessage();
            return false;
        }
    }

    function excluirCliente() {
        $database = new Conexao();
        $db = $database->getConnection();
        $sql = "DELETE FROM cliente WHERE ID_Cliente =:ID_Cliente";

        try {
            $stmt = $db->prepare($sql);
            $stmt -> bindParam (':ID_Cliente', $this->id_cliente);
            $stmt -> execute();
            return true;
        } catch (PDOException $e){
            echo "Erro ao excluir cliente: " . $e -> getMessage();
            return false;
        }
    }

    function atualizarRegistro() {
        $database = new Conexao();
        $db = $database->getConnection();
        $sql = "UPDATE cliente SET Nome = :Nome, CPF = :CPF WHERE ID_Cliente = :ID_Cliente";

        try {
            $stmt = $db->prepare($sql);
            $stmt -> bindParam (':id_pessoa', $this->id_cliente);
            $stmt -> bindParam (':nome', $this->nome);
            $stmt -> bindParam (':email', $this->cpf);
            $stmt -> execute();
            return true;
        } catch (PDOException $e){
            echo "Erro ao atualizar registro: " . $e -> getMessage();
            return false;
        }
    }
}

?>