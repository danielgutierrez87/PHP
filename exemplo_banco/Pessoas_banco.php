<?php 

include "Conexao.class.php";

    class Pessoas_banco {
        private $nome;
        private $email;
        private $idade;
        private $id_pessoa;

        function setId_pessoa($id_pessoa) {
            $this->id_pessoa = $id_pessoa;
        }
        function getId_pessoa() {
            return $this->id_pessoa;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }
        function getNome() {
            return $this->nome;
        }

        function setEmail($email) {
            $this->email = $email;
        }
        function getEmail() {
            return $this->email;
        }

        function setIdade($idade) {
            $this->idade = $idade;
        }
        function getIdade() {
            return $this->idade;
        }

        function listarPessoa() {
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