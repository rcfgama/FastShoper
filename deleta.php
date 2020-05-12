<?php
/* Arquivo para deletar os produtos na lista geral na página Fast Shoper. Desenvolvida por Ronaldo Gama - versão 1.3 */
	$recid = $_GET['idexc'];

	include("conecta.php");

	mysqli_query($conexao, "delete from produtos where id='$recid'");
	
	header("location:edita.php");

?>