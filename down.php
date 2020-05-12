<?php
/* Arquivo para remover o tem da lista de compras na página Fast Shoper. Desenvolvida por Ronaldo Gama - versão 1.3 */
	$idcomp = $_GET['id'];

	include("conecta.php");

	mysqli_query($conexao, "UPDATE produtos SET COMPRAR = 'GERAL' WHERE ID = '$idcomp'");

	header("location:compra.php");

?>