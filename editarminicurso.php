<?php include("cabecalho.php");
 include("Conexao.php"); 
 include("MinicursoDao.php"); 

$id = $_GET['id'];
$minicurso = buscarMinicurso($conn, $id);
?>
	<h1>Editar de Minicurso</h1>
<form action="editar.php" method="post">
	<input type="hidden" name="id" value="<?=$minicurso['id']?>">
<table class="table">
	<tr>
		<td>Título:</td>
		<td><input class="form-control" type="text" name="nome" value="<?=$minicurso['nome']?>"></td>
	</tr>
	<tr>
		<td>Ministrante:</td>
		<td><input class="form-control" type="text" name="ministrante" value="<?=$minicurso['ministrante']?>"></td>
	</tr>
	<tr>
		<td>Descricao:</td>
		<td><textarea class="form-control" name="descricao"><?=$minicurso['descricao']?></textarea></td>
	</tr>
	<tr>
		<td>Carga Horária:</td>
		<td><input class="form-control"  name="carga_horaria" value="<?=$minicurso['carga_horaria']?>"></td>
	</tr>
	<tr>
		<td>Pré-requisitos:</td>
		<td><textarea class="form-control" name="pre_requisitos"><?=$minicurso['pre_requisitos']?></textarea></td>
	</tr>
	<tr>
		<td>Data Prevista:</td>
		<td><input class="form-control"  name="data_prevista" value="<?=$minicurso['data_prevista']?>"?></td>
	</tr>
	<tr>
		<td>
			<button class="btn btn-primary" type="submit">Editar</button><br/>
		</td>
	</tr>
</table>
</form>

<?php include("rodape.php");?>
