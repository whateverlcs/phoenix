<?php
	
	$id = $_GET['id'];
	echo "<script>
			if(confirm('Tem certeza que deseja excluir?')) {
				window.location = 'delete.usuarios.php?id=".$id."';
			} else {
				window.location='listarusuarios.php';
			}
			</script>";
?>