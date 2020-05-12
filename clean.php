<?php
/* Arquivo que zera a lista de compras na página Fast Shoper. Desenvolvida por Ronaldo Gama - versão 1.3 */		
	include("conecta.php");

	mysqli_query($conexao, "UPDATE produtos SET COMPRAR = 'GERAL'");

	header("location:edita.php");

?>