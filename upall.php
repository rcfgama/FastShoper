<?php
	/* Arquivo para enviar os produtos para a lista de compras na página Fast Shopper. Desenvolvida por Ronaldo Gama - versão 0.4 */
	$idcomp = $_POST['id'];

	include("conecta.php");

	mysqli_query($conexao, "UPDATE produtos SET COMPRAR = 'COMPRA' WHERE ID = '$idcomp'");

	header("location:?b=edita");

?>