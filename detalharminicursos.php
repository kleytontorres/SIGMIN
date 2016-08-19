<?php 
 include("cabecalho.php"); 
 include("Conexao.php"); 
 include("MinicursoDao.php"); ?>
 


<table class="table">
<?php
		$minicursos = listaMinicursos($conn);
		foreach($minicursos as $minicurso):
	?>
	<tr>

		<td><?= $minicurso['nome'] ?></td>
		<td><?= $minicurso['ministrante'] ?></td>
		<td><a class="btn btn-primary" href="detalhar.php?id=<?=$minicurso['id']?> ">detalhar</a></td>

	</tr>
	<?php
		endforeach
	?>
</table>

<?php include("rodape.php"); ?>
