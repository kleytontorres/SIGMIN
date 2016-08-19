<?php

require_once ("conexao.php");
require_once ("Usuario.php");

class UsuarioDAO {

    public static function insert(Usuario $usuario) {
        $con = conexao::connect();
        $matricula = $usuario->getMatricula();
        $senha = $usuario->getSenha();
        $nome = $usuario->getNome();
        $email = $usuario->getEmail();

        $comando = "INSERT into Usuario (matricula, senha, nome, email) VALUES ('$matricula', '$senha', '$nome', '$email')";

        $resultado = mysqli_query($con, $comando);
        if (!$resultado) {
            echo "<br/>Erro no insert: " . mysqli_error($con);
        }
        Conexao::close();
    }

    public static function update(Usuario $usuario) {
        $con = conexao::connect();
        $matricula = $usuario->getMatricula();
        $senha = $usuario->getSenha();
        $nome = $usuario->getNome();
        $email = $usuario->getEmail();

        $comando = "UPDATE Usuario SET matricula = '$matricula', senha = '$senha', nome = '$nome', email = '$email' WHERE matricula = $matricula";

        $resultado = mysqli_query($con, $comando);
        if (!$resultado) {
            echo "<br/>Erro no insert: " . mysqli_error($con);
        }
        Conexao::close();
    }

    public static function delete(Usuario $matricula) {
        $con = conexao::connect();

        $comando = "DELETE FROM Usuario WHERE matricula = $matricula";

        $resultado = mysqli_query($con, $comando);
        if (!$resultado) {
            echo "<br/>Erro no insert: " . mysqli_error($con);
        }
        Conexao::close();
    }

}

?>
