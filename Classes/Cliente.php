<?php 
    require_once 'conexao.php';
    require_once 'endereco.php';

    class Cliente extends Endereco {
        private $nome;
        private $endereco; 
    
        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setEndereco(Endereco $endereco){
            $this->endereco = $endereco;
        }
        public function getEndereco(){
            return $this->endereco;
        }
    
        public function inserirCliente(){
            $database = new Conexao();
            $db = $database->getConnection();
            $sql = 'INSERT INTO nome (nome) VALUES (:rua, :endereco)';
            try {
                $stmt = $db->prepare($sql);
                $stmt->bindParam(':rua', $this->rua);
                $stmt->bindParam(':bairro', $this->bairro);
                $stmt->execute();
        
                return true;
            } catch (PDOException $e) {
                echo 'Erro ao inserir endereço: ' . $e->getMessage();
                return false;
            }
        }
    }
?>