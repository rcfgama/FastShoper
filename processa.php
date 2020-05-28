<?php
/* Arquivo que manda a inserção de um novo produto para o banco de dados na página Fast ShoPper. Desenvolvida por Ronaldo Gama - versão 0.4 */
	include("conecta.php");

	$NOME = $_POST['nome'];
	$UNID = $_POST['unid'];
	$VALOR = $_POST['valor'];
	$QTD = $_POST['qtd'];
	$TOTAL = $VALOR * $QTD;

	mysqli_query($conexao, "insert into produtos (NOME, UNID, VALOR, QTD, TOTAL, COMPRAR) values ('$NOME', '$UNID', '$VALOR', '$QTD', '$TOTAL', 'GERAL')");

	header("location:?b=edita");
?>