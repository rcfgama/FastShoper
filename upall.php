<?php
	$idcomp = $_GET['id'];

	include("conecta.php");

	mysqli_query($conexao, "UPDATE produtos SET COMPRAR = 1 WHERE ID = '$idcomp'");

	header("location:edita.php");

?>