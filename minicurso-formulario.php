<?php include("cabecalho.php");
 include("Conexao.php"); 
 include("MinicursoDao.php"); 
 
  
?>
	<h1>Formulário do Minicurso</h1>
<form action="inserirminicurso.php" method="post">
<table class="table">
	<tr>
		<td>Título:</td>
		<td><input class="form-control" type="text" name="nome"></td>
	</tr>
	<tr>
		<td>Ministrante:</td>
		<td><input class="form-control" type="text" name="ministrante"></td>
	</tr>
	<tr>
		<td>Descricao:</td>
		<td><textarea class="form-control" name="descricao"></textarea></td>
	</tr>
	<tr>
		<td>Carga Horária:</td>
		<td><input class="form-control" name="carga_horaria"></td>
	</tr> 
	<tr>
		<td>Pré-requisitos:</td>
		<td><textarea class="form-control" name="pre_requisitos"></textarea></td>
	</tr>
	<tr>
		<td>Data Prevista:</td>
		<td><input class="form-control" name="data_prevista"></td>
	</tr>
	<tr>
		<td>
			<button class="btn btn-primary" type="submit">Cadastrar</button><br/>
		</td>
	</tr>
</table>
</form>

<?php include("rodape.php");?>
