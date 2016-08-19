<?php include("cabecalho.php");
 include("Conexao.php");
 include("MinicursoDao.php"); 
 
$id = $_POST['id'];
$minicurso = buscarMinicurso($conn, $id);
		
	$nome = $_POST['nome'];
	$ministrante = $_POST['ministrante'];
	$descricao = $_POST['descricao'];
	$carga_horaria = $_POST["carga_horaria"];
	$pre_requisitos = $_POST["pre_requisitos"];
    $data_prevista =   $_POST["data_prevista"];

if(editarMinicurso($conn, $id, $nome, $ministrante, $descricao, $carga_horaria, $pre_requisitos, $data_prevista)){?>
	 <p class="text-success">O minicurso foi alterado.</p>
<?php }else{
	$msg = mysqli_error($conn);
?> 
	 <p class="text-danger">Não foi alterado: <?= $msg?></p>
<?php
	
}
 
?>
 
<?php include("rodape.php");?>
    