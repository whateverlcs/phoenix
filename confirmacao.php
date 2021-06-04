<?php
	
	$id = $_GET['id'];
	echo "<script>
			if(confirm('Tem certeza que deseja excluir?')) {
				window.location = 'delete.produtos.php?id=".$id."';
			} else {
				window.location='listar.php';
			}
			</script>";
?>