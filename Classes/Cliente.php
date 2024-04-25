<?php 
    class Cliente {
        private String $nome;
        private String $contato;
        private Endereco $endereco;

        public function setNome(String $nome) {
            $this->nome = $nome;
        }
        public function getNome() {
            return $this->nome;
        }

        public function setContato(String $contato) {
            $this->contato = $contato;
        }
        public function getContato() {
            return $this->contato;
        }

        public function setEndereco(Endereco $endereco) { 
            $this->endereco = $endereco;
        }
        public function getEndereco() {
            return $this->endereco;
        }
    }
?>