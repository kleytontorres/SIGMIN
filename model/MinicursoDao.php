<?php

require_once ("conexao.php");
require_once ("Minicurso.php");

class UsuarioDAO {

    public static function insert(Minicurso $minicurso) {
        $con = conexao::connect();
        $nome = $usuario->nome();
        $ministrante = $usuario->getMinistrante();
        $carga_horaria = $usuario->getCarga_horaria();
        $descricao = $usuario->getDescricao();
        $pre_requisitos = $usuario->getPre_requisitos();
        $data_prevista = $data_prevista->getData_prevista();

        /*
    private $nome;
    private $ministrante;
    private $carga_horaria;
    private $descricao;
    private $pre_requisitos;
    private $data_prevista;
    */

        $comando = "INSERT into Minicurso (nome, ministrante, carga_horaria, descricao, pre_requisitos, data_prevista) VALUES ('$nome', '$ministrante', '$carga_horaria', '$descricao', '$pre_requisitos', '$data_prevista')";

        $resultado = mysqli_query($con, $comando);
        if (!$resultado) {
            echo "<br/>Erro no insert: " . mysqli_error($con);
        }
        Conexao::close();
    }

    public static function update(Minicurso $minicurso) {
        $con = conexao::connect();

        $nome = $usuario->nome();
        $ministrante = $usuario->getMinistrante();
        $carga_horaria = $usuario->getCarga_horaria();
        $descricao = $usuario->getDescricao();
        $pre_requisitos = $usuario->getPre_requisitos();
        $data_prevista = $data_prevista->getData_prevista();


        $comando = "UPDATE Minicurso SET nome = '$nome', '$ministrante', '$carga_horaria', '$descricao', '$pre_requisitos', '$data_prevista'";

        $resultado = mysqli_query($con, $comando);
        if (!$resultado) {
            echo "<br/>Erro no insert: " . mysqli_error($con);
        }
        Conexao::close();
    }

    public static function delete(Minicurso $nome) {
        $con = conexao::connect();

        $comando = "DELETE FROM Minicurso WHERE nome = $nome";

        $resultado = mysqli_query($con, $comando);
        if (!$resultado) {
            echo "<br/>Erro no insert: " . mysqli_error($con);
        }
        Conexao::close();
    }

}

?>