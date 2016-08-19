<?php

class Inscricao{
    private $nome;
    private $matricula_cpf;
    private $email;
    
    function __construct($nome, $matricula_cpf, $email) {
        $this->nome = $nome;
        $this->matricula_cpf = $matricula_cpf;
        $this->email = $email;
    }
    
    
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getMatricula_cpf() {
        return $this->matricula_cpf;
    }

    public function setMatricula_cpf($matricula_cpf) {
        $this->matricula_cpf = $matricula_cpf;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }


}
?>
