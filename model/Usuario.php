<?php

class Contato{

    private $matricula;
    private $senha;
    private $nome;
    private $email;
    
    function __construct($matricula, $senha, $nome, $email) {
        $this->matricula = $matricula;
        $this->senha = $senha;
        $this->nome = $nome;
        $this->email = $email;
    }
    
    
    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }




}


?>
