<!DOCTYPE html>
<html>
	<head>
		<title>FastShoper</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<header>
			<img src="fast.png" width="250px">
		</header>
		<div class="home">
			<table align="center" border="1">
				<tr>
					<td><strong>TOTAL DA COMPRA(R$)</strong></td>
				</tr>
				<?php
					include("conecta.php");
					$resultado = mysqli_query($conexao, "SELECT SUM(round(TOTAL,2)) AS totalPreco FROM produtos");
				$linhas = mysqli_num_rows($resultado);
					while($linhas = mysqli_fetch_array($resultado)) {?>
						<tr>
							<td><?=$linhas['totalPreco']?></td>
						</tr>
				<?php   }?>
			</table>
			<br>
			<table align="center" border="1">
				<tr>
					<td><strong>PRODUTO</strong></td>
					<td><strong>UNID.</strong></td>
					<td><strong>VALOR(R$)</strong></td>
					<td><strong>QUANT.</strong></td>
					<td><strong>TOTAL(R$)</strong></td>
					<td width="10"><strong>ALTERAR</strong></td>
				</tr>
				<?php
				$seleciona = mysqli_query($conexao, "select * from produtos order by id");
					while($campo = mysqli_fetch_array($seleciona)) {?>
						<tr>
							<td><?=$campo["NOME"]?></td>
							<td><?=$campo["UNID"]?></td>
							<td><?=$campo["VALOR"]?></td>
							<td><?=$campo["QTD"]?></td>
							<td><?=$campo["TOTAL"]?></td>
							<td><a href="altera.php?id=<?=$campo["ID"]?>">Editar</a></td>
						</tr>
				<?php	}?>	
			</table>
			<br>
			<form action="insere.php" method="post">
				<p><input type="submit" value="INSERIR PRODUTO" name="submit"></p>
			<br>
			<a href="index.php">SAIR</a>	
		</div>
		<footer>
			Desenvolvido por Ronaldo Gama
		</footer>
	</body>
</html>