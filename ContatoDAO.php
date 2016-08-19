<?php

require_once "Conexao.php";
require_once "../model/Contato.php";
require_once "EnderecoDAO.php";

class ContatoDAO {
    public static function insert(Contato $contato){
        $conn = Conexao::connect();
       
        $nome = $contato->getNome();
        $ministrante = $contato->getMinistrante();

		$query = "insert into minicurso( nome, ministrante, descricao, carga_horaria, pre_requisitos, data_prevista) values( '($nome)', '($ministrante)', '($descricao)', ($carga_horaria), '($pre_requisitos)', ($data_prevista))";
        $result = mysqli_query($conn, $query);
        
        if (!$result){
            die ("Erro ao inserir: ". mysqli_error($conn));
        }else{
            echo "Insert realizado com sucesso!";
        }
        
        Conexao::close();
    }
    

    public static function update(Contato $contato){
        $conn = Conexao::connect();
        
        $id = $contato->getId();
        $nome = $contato->getNome();
        $telefone = $contato->getTelefone();
        $endereco = $contato->getEndereco();
        $endereco_id = $endereco->getId();
        
        $query = " UPDATE contato set nome = '$nome', telefone = '$telefone', endereco_id= $endereco_id ";
        $query .=  "WHERE id = $id";     
        
        $result = mysqli_query($conn, $query);
        
        if (!$result){
            die ("Erro ao atualizar: ". mysqli_error($conn));
        }else{
            echo "Update realizado com sucesso!";
        }
        Conexao::close();
    }
	
	
	function removerMinicurso($conn, $id){
	
	
	return mysqli_query($conn, $query);
	
	
}

    public static function delete(Contato $contato){
        $conn = Conexao::connect();
        
        $id = $minicurso->getId();
$query = "delete from minicurso where id = {$id}";
	//$query =  "DELETE FROM `minicurso` WHERE `minicurso`.`id` = {$id}";
		        
        $result = mysqli_query($conn, $query);
        
        if (!$result){
            die ("Erro ao excluir: ". mysqli_error($conn));
        }else{
            echo "Delete realizado com sucesso!";
        }
        Conexao::close();
    }
    
    public static function getAll(){
        $conn = Conexao::connect();
        $query = "SELECT * from contato";
        $result = mysqli_query($conn, $query);;
        if (!$result){
            die ("Erro ao realizar select: ". mysqli_error($conn));
       }else{
            $todosOsContatos = array();
            while ($reg = mysqli_fetch_array($result)){
                $endereco = EnderecoDAO::getById($reg["endereco_id"]);
                $contato = new Contato($reg["nome"], $reg["telefone"], $endereco, $reg["id"]);
                array_push($todosOsContatos, $contato);
            }
            Conexao::close();
            return $todosOsContatos;
        }
        return null;
    }
    public static function getById($id){
        $conn = Conexao::connect();
        $query = "SELECT * from contato where id=$id";
        $result = mysqli_query($conn, $query);;
        if (!$result){
            die ("Erro ao realizar select: ". mysqli_error($conn));
       }else{
            while ($reg = mysqli_fetch_array($result)){
                $endereco = EnderecoDAO::getById($reg["endereco_id"]);
                $contato = new Contato($reg["nome"], $reg["telefone"], $endereco);
                return $contato;
            }
            Conexao::close();
        }
        return null;
    }
}

$a;