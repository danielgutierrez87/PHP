<?php 
    class Avaliacao {
        private int $nota;
        private String $observacao;

        public function calcularMedia() {

        }

        public function setNota(int $nota) {
            $this->nota = $nota;
        }
        public function getNota() {
            return $this->nota;
        }

        public function setObservacao(String $observacao) {
            $this->observacao = $observacao;
        }
        public function getObservacao() {
            return $this->observacao;
        }
    }
?>