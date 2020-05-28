<?php
	/* Arquivo para remover o tem da lista de compras na página Fast Shopper. Desenvolvida por Ronaldo Gama - versão 0.4 */
	$idcomp = $_POST['id'];

	include("conecta.php");

	mysqli_query($conexao, "UPDATE produtos SET COMPRAR = 'GERAL' WHERE ID = '$idcomp'");

	header("location:?b=compra");

?>