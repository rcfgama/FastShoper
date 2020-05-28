<?php
	/* Arquivo para deletar os produtos na lista geral na página Fast Shopper. Desenvolvida por Ronaldo Gama - versão 0.4 */
	$recid = $_POST['id'];

	include("conecta.php");

	mysqli_query($conexao, "delete from produtos where id='$recid'");
	
	header("location:?b=edita");

?>