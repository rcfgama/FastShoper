<?php
/* Arquivo para enviar os produtos para a lista carrinho na página Fast Shoper. Desenvolvida por Ronaldo Gama - versão 1.3 */
	$idcomp = $_GET['id'];

	include("conecta.php");

	mysqli_query($conexao, "UPDATE produtos SET COMPRAR = 'CARRO' WHERE ID = '$idcomp'");

	header("location:compra.php");

?>