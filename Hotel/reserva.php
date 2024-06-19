<?php

include "Conexao.php";

class reserva {

    private $id_reserva;
    private cliente $id_cliente;
    private quarto $id_quarto;
    private $check_in;
    private $check_out;

    public function __construct($id_reserva, $id_cliente, $id_quarto) {
        $this->id_reserva = $id_reserva;
        $this->id_cliente = $id_cliente;
        $this->id_quarto = $id_quarto;
        $this->check_in = date("F j, Y, g:i a");
        $this->check_out = date("F j, Y, g:i a");
    }

    public function getId_Reserva() {
        return $this->id_reserva;
    }

    public function setId_Reserva($id_reserva) {
        $this->id_reserva = $id_reserva;
    }

    public function getId_Cliente() {
        return $this->id_cliente;
    }

    public function setId_Cliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }

    public function getId_Quarto() {
        return $this->id_quarto;
    }

    public function setId_Quarto($id_quarto) {
        $this->id_quarto = $id_quarto;
    }

    public function getCheck_In() {
        return $this->check_in;
    }

    public function setCheck_In($check_in) {
        $this->check_in = $check_in;
    }

    public function getCheck_Out() {
        return $this->check_out;
    }

    public function setCheck__Out($check_out) {
        $this->check_out = $check_out;
    }
}

?>