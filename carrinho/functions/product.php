<?php 

function getProducts($pdo){
	$sql = "SELECT *  FROM produto ";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProductsByIds($pdo, $ids) {
	$sql = "SELECT * FROM produto WHERE id_produto IN (".$ids.")";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}