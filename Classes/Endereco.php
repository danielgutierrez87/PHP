<?php 
    class Endereco {
        private String $rua;
        private String $bairro;
        private String $cidade;

        public function setRua(string $rua) {
            $this->rua = $rua;
        }
        public function getRua() {
            return $this->rua;
        }

        public function setBairro(String $bairro) {
            $this->bairro = $bairro;
        }
        public function getBairro() {
            return $this->bairro;
        }

        public function setCidade(String $cidade) {
            $this->cidade = $cidade;
        }
        public function getCidade() {
            return $this->cidade;
        }
    }
?>