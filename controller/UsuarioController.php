<?php

require_once ("model/UsuarioDAO");

class UsuarioController{
    
    public static function inserir(){
        $matricula = $_POST["matricula"];
        $senha = $_POST["senha"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        UsuarioDAO::insert($usuario);
        require_once 'view/content.php';
    }
    
    public static function excluir(){
        $matricula = $_GET["matricula"];
        $senha = $_GET["senha"];
        $nome = "";
        $email = "";
        UsuarioDAO::delete($matricula);
       
    }
    
    public static function recuperar(){
        $usuario = UsuarioDAO::getByMatricula($_GET["matricula"]);
        require_once 'view/editarusuario.php';
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
