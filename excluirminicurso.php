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


<table class="table">
	<?php
		$minicursos = listaMinicursos($conn);
		foreach($minicursos as $minicurso):
	?>
	<tr>

		<td><?= $minicurso['nome'] ?></td>
		<td><?= $minicurso['ministrante'] ?></td>
		
		
		<td>
		<form action="removerminicurso.php" method="post">
			<input type="hidden" name="id" value ="<?=$minicurso['id']?>" >
			<button class="btn btn-danger" >remover</button>
		</form>
		</td>
	</tr>
	<?php
		endforeach
	?> 
</table>

<?php include("rodape.php"); ?>


	