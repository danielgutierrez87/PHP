<?php

class Pessoa {

    private $nome;
    private $idade;
    private $email;
    private $telefone;
    private $hora;
    private $site;
    private $senha;
    private $cor;
    private $filhos;
    private $peso;
    private $msg;

    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function getIdade() {
        return $this->idade;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
    public function getEmail() {
        return $this->email;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    public function getTelefone() {
        return $this->telefone;
    }

    public function setHora($hora) {
        $this->hora = $hora;
    }
    public function getHora() {
        return $this->hora;
    }

    public function setSite($site) {
        $this->site = $site;
    }
    public function getSite() {
        return $this->site;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }
    public function getSenha() {
        return $this->senha;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }
    public function getCor() {
        return $this->cor;
    }

    public function setFilhos($filhos) {
        $this->filhos = $filhos;
    }
    public function getFilhos() {
        return $this->filhos;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }
    public function getPeso() {
        return $this->peso;
    }

    public function setMsg($msg) {
        $this->msg = $msg;
    }
    public function getMsg() {
        return $this->msg;
    }

    public function monstrarDados() {
      echo "Oi, eu sou o " . $this->nome . "!"; 
      echo "Minha idade é:" . $this->idade . ".";
      echo "Meu e-mail é: " . $this->email . "."; 
      echo "Meu telefone é: " . $this->telefone . "."; 
      echo "A hora desejada é " . $this->hora . "."; 
      echo "Meu site é: " . $this->site . "."; 
      echo "A senha é:  " . $this->senha . ".";
      echo "A cor escolhida é: " . $this->cor . "."; 
      echo "Eu tenho " . $this->filhos . "filhos."; 
      echo "Meu peso é: " . $this->peso . "."; 
      echo "A mensagem é:  " . $this->msg . "."; 
    }
}

?>