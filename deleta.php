<?php
	$recid = $_GET['idexc'];

	include("conecta.php");

	mysqli_query($conexao, "delete from produtos where id='$recid'");
	
	header("location:edita.php");

?>