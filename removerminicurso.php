 <?php 
 include("cabecalho.php"); 
 include("Conexao.php"); 
 include("MinicursoDao.php"); 
 
$id = $_POST['id'];
removerMinicurso($conn, $id);

header("Location: excluirminicurso.php?removido=true");
die();
?>


