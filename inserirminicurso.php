<?php include("cabecalho.php");?>
<?php include("Conexao.php");?>	
<?php include("MinicursoDao.php"); ?>
<?php
			
		
		$nome = $_POST['nome'];
		$ministrante = $_POST['ministrante'];
		$descricao = $_POST['descricao'];
		$carga_horaria = $_POST["carga_horaria"];
		$pre_requisitos = $_POST["pre_requisitos"];
        $data_prevista =   $_POST["data_prevista"];

//$conn = mysqli_connect('localhost', 'root', '', 'minicursosdb');


if(insereMinicurso($conn,$nome, $ministrante, $descricao, $carga_horaria, $pre_requisitos, $data_prevista)){?>
	 <p class="text-success">Adicionado com sucesso!</p>
<?php }else{
	$msg = mysqli_error($conn);
?> 
	 <p class="text-danger">Não foi adicionado: <?= $msg?></p>
<?php
	
}
mysqli_close($conn);
//$minicurso = new Minicurso("", "", "", $nome);
//$contato = new Contato($nome, $ministrante, //$carga_horaria, $descricao, $pre_requisitos, //$data_prevista);
 
//MinicursoDAO::insert($minicurso);

//header("Location: listarminicursos.php");
 
?>
 
<?php include("rodape.php");?>
    