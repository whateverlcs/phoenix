<?php
	
	$id = $_GET['id'];
	echo "<script>
			if(confirm('Tem certeza que deseja excluir?')) {
				window.location = 'delete.pedidos.php?id=".$id."';
			} else {
				window.location='listarpedidos.php';
			}
			</script>";
?>