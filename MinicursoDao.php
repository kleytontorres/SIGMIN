<?php


function listaMinicursos($conn){
	$minicursos = array();
$resultado = mysqli_query($conn, "select * from minicurso"); 
while($minicurso = mysqli_fetch_assoc($resultado)){


	
	array_push($minicursos, $minicurso);

	}  
		return $minicursos;
}

function insereMinicurso($conn, $nome, $ministrante, $descricao, $carga_horaria, $pre_requisitos, $data_prevista){
	$query = "insert into minicurso( nome, ministrante, descricao, carga_horaria, pre_requisitos, data_prevista) values( '$nome', '$ministrante', '$descricao', ($carga_horaria), '$pre_requisitos', ($data_prevista))";
	return mysqli_query($conn, $query);
}
function editarMinicurso($conn, $id, $nome, $ministrante, $descricao, $carga_horaria, $pre_requisitos, $data_prevista){

	$query = "update minicurso set nome = '$nome', ministrante = '$ministrante', descricao = '$descricao', carga_horaria = ($carga_horaria), pre_requisitos = '$pre_requisitos', data_prevista = ($data_prevista) where id = {$id}";
	return mysqli_query($conn, $query);
}

function buscarMinicurso($conn, $id){
	$query = "select * from minicurso where id = {$id}";
	$resultado = mysqli_query($conn, $query);
	return mysqli_fetch_assoc($resultado);

}

function removerMinicurso($conn, $id){
	
	$query = "delete from minicurso where id = {$id}";
	//$query =  "DELETE FROM `minicurso` WHERE `minicurso`.`id` = {$id}";
		
	return mysqli_query($conn, $query);
	
	
}

?>

