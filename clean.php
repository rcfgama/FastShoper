<?php
		
	include("conecta.php");

	mysqli_query($conexao, "UPDATE produtos SET COMPRAR = 0");

	header("location:edita.php");

?>