<?php 
    class Cliente {
        private string $nome;
        private string $contato;
        private Endereco $endereco;
    
        public function getNome(): string {
            return $this->nome;
        }
        public function setNome(string $nome): void {
            $this->nome = $nome;
        }
        public function getContato(): string {
            return $this->contato;
        }
        public function setContato(string $contato): void {
            $this->contato = $contato;
        }
        public function getEndereco(): Endereco {
            return $this->endereco;
        }
        public function setEndereco(Endereco $endereco): void {
            $this->endereco = $endereco;
        }
    }
?>