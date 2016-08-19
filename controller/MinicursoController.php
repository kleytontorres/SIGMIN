<?php

require_once ("model/MinicursoDAO");

class MinicursoController{
    
    public static function inserir(){
        $nome = $_POST["nome"];
        $ministrante = $_POST["ministrante"];
        $carga_horaria = $_POST["carga_horaria"];
        $pre_requisitos = $_POST["pre_requisitos"];
        $data_prevista = $_POST["data_prevista"];

        UsuarioDAO::insert($minicurso);
        require_once 'view/content.php';
    }
    /*
    private $nome;
    private $ministrante;
    private $carga_horaria;
    private $descricao;
    private $pre_requisitos;
    private $data_prevista;
    */
    public static function listar(){
        $minicurso = MinicursoDAO::getByNome($_GET["nome"]);
        require_once 'view/editarminicurso.php';
        }
        
        public static function detalhar(){
        $nome = $_GET["nome"];
        $ministrante = $_GET["ministrante"];
        
        MinicursoDAO::delete($nome);
       
    }
        public static function excluir(){
        $matricula = $_GET["matricula"];
        $senha = $_GET["senha"];
        $nome = "";
        $email = "";
        UsuarioDAO::delete($matricula);
       
    }
    
    public static function editar(){
        $matricula = $_POST["matricula"];
        $senha = $_POST["senha"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $usuario = new Usuario ($senha, $nome, $email, $_GET["matricula"]);
        UsuarioDAO::update($usuario);
        
    }
}
?>
