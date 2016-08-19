<?php

class Minicurso{
	private $id;
    private $nome;
    private $ministrante;
    private $carga_horaria;
    private $descricao;
    private $pre_requisitos;
    private $data_prevista;
    
    function __construct( $id, $nome, $ministrante, $carga_horaria, $descricao, $pre_requisitos, $data_prevista) {
		$this->id = $id;
        $this->nome = $nome;
        $this->ministrante = $ministrante;
        $this->carga_horaria = $carga_horaria;
        $this->descricao = $descricao;
        $this->pre_requisitos = $pre_requisitos;
        $this->data_prevista = $data_prevista;
    }
     public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getMinistrante() {
        return $this->ministrante;
    }

    public function setMinistrante($ministrante) {
        $this->ministrante = $ministrante;
    }

    public function getCarga_horaria() {
        return $this->carga_horaria;
    }

    public function setCarga_horaria($carga_horaria) {
        $this->carga_horaria = $carga_horaria;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getPre_requisitos() {
        return $this->pre_requisitos;
    }

    public function setPre_requisitos($pre_requisitos) {
        $this->pre_requisitos = $pre_requisitos;
    }

    public function getData_prevista() {
        return $this->data_prevista;
    }

    public function setData_prevista($data_prevista) {
        $this->data_prevista = $data_prevista;
    }


}
?>
