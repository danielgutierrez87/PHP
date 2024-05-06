<?php 
    
    include_once 'ItemDopedido.php';
    class Refri extends ItemdoPedido {
        private String $sabor; 

        public function setSabor(String $sabor) {
            $this->sabor = $sabor;
        }
        public function getSabor() {
            return $this->sabor;
        }
    }
?>