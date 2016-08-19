<?php 
 include("cabecalho.php"); 
 include("Conexao.php"); 
 include("MinicursoDao.php"); 

$id = $_GET['id'];
$minicurso = buscarMinicurso($conn, $id);
?>
	<h1>Detalhamento do Minicurso: <?=$minicurso['nome']?></h1>

<table class="table">

	<tr>
		<td>Título:</td>
		<td><?= $minicurso['nome'] ?></td>
	</tr>
	<tr>
		<td>Ministrante:</td>
		<td><?= $minicurso['ministrante']?></td>
	</tr>
	<tr>
		<td>Descrição:</td>
		<td><?= substr($minicurso['descricao'], 0, 800) ?></td>
	</tr>
	<tr>
		<td>Carga Horária:</td>
		<td><?= $minicurso['carga_horaria'] ?></td>
	</tr>
	<tr>
		<td>Pré-requisitos:</td>
		<td><?= $minicurso['pre_requisitos'] ?></textarea></td>
	</tr>
	<tr>
		<td>Data Prevista:</td>
		<td><?= $minicurso['data_prevista'] ?></td>
	</tr>

</table>


<?php include("rodape.php"); ?>
