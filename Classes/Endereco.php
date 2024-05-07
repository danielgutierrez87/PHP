<?php 
    class Endereco {
        private $rua;
        private $bairro;
    
        public function setRua($rua)
        {
            $this->rua = $rua;
        }
        public function getRua()
        {
            return $this->rua;
        }
        public function setBairro($bairro)
        {
            $this->bairro = $bairro;
        }
        public function getBairro()
        {
            return $this->bairro;
        }
    }
?>