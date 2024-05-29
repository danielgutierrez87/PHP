<?php

include "conexão.php";

class Viajante {

private $marca;
private $modelo;
private $motor;
private $kmInicial;
private $kmFinal;
private $totLitros;
private $combustivel;

    public function setMarca($marca) {
        $this->marca = $marca;
    }
    public function getMarca() {
        return $this->marca;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    public function getModelo() {
        return $this->modelo;
    }

    public function setMotor($motor) {
        $this->motor = $motor;
    }
    public function getMotor() {
        return $this->motor;
    }

    public function setKmInicial($kmInicial) {
        $this->kmInicial = $kmInicial;
    }
    public function getkmInicial() {
        return $this->kmInicial;
    }

    public function setKmFinal($kmFinal) {
        $this->kmFinal = $kmFinal;
    }
    public function getkmFinal() {
        return $this->kmFinal;
    }

    public function setTotLitros($totLitros) {
        $this->totLitros = $totLitros;
    }
    public function getTotLitros() {
        return $this->totLitros;
    }

    public function setCombustivel($combustivel) {
        $this->combustivel = $combustivel;
    }
    public function getCombustivel() {
        return $this->combustivel;
    }

    public function status() {
        echo "A marca do veículo é " . $this->marca . "!<br>"; 
        echo "O modelo é:" . $this->modelo . ".<br>";
        echo "A motorização é: " . $this->motor . ".<br>"; 
        echo "A km inicial da viajem foi de: " . $this->kmInicial . ".<br>"; 
        echo "A km final da viajem foi de " . $this->kmFinal . ".<br>"; 
        echo "O consumo de combustível foi de " . $this->totLitros . " litros.<br>"; 
        echo "O combustível usado foi:  " . $this->combustivel . ".<br>";
    }

    public function media() {
        $m = ($this->kmFinal - $this->kmInicial) / $this->totLitros;

        echo "A média de km/l do carro foi de: " . $m; 
    }
}

?> 