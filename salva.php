<?php
/* Arquivo que envia as alterações do produto para o banco de dados na página Fast Shoper. Desenvolvida por Ronaldo Gama - versão 1.3 */	
	include("conecta.php");

	$ID = $_POST['id'];
	$NOME = $_POST['nome'];
	$UNID = $_POST['unid'];
	$VALOR = $_POST['valor'];
	$QTD = $_POST['qtd'];
	$TOTAL = $VALOR * $QTD;

	mysqli_query($conexao, "UPDATE produtos SET NOME = '$NOME', UNID = '$UNID', VALOR = '$VALOR', QTD = '$QTD', TOTAL = '$TOTAL' WHERE ID = '$ID'");

	header("location:edita.php");

?>