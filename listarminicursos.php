<?php 
 include("cabecalho.php"); 
 include("Conexao.php"); 
 include("MinicursoDao.php"); ?>
 <?php
	if(array_key_exists("removido", $_GET)  && $_GET["removido"]=="true"){
?>
	<p class="alert-success">Minicurso removido com sucesso.</p>
<?php
	}
 ?>

	<h1>Lista dos Minicursos Disponíveis</h1>


<table class="table">
	<?php
		$minicursos = listaMinicursos($conn);
		foreach($minicursos as $minicurso):
	?>
	<tr>

		<td><?= $minicurso['nome'] ?></td>
		<td><?= $minicurso['ministrante'] ?></td>
		<td><?= substr($minicurso['descricao'], 0, 40) ?></td>
		<td><a class="btn btn-primary" href="editarminicurso.php?id=<?=$minicurso['id']?>">editar</a></td>
	</tr>
	<?php
		endforeach
	?> 
</table>

<?php include("rodape.php"); ?>
