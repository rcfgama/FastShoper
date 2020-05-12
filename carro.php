<!DOCTYPE html>
<html>
<!-- Arquivo que monta a lista carrinho na página Fast Shoper. Desenvolvido por Ronalgo Gama - versão 1.3 -->
	<head>
		<title>FastShoper</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<header>
			<img src="fast.png" width="250px"><strong>CARRINHO</strong>
		</header>
		<div class="home">
			<table align="center" border="1">
				<tr>
					<td><strong>TOTAL DA COMPRA(R$)</strong></td>
				</tr>
				<?php
					include("conecta.php");
					$resultado = mysqli_query($conexao, "SELECT SUM(round(TOTAL,2)) AS totalPreco FROM produtos WHERE COMPRAR = 'CARRO'");
				$linhas = mysqli_num_rows($resultado);
					while($linhas = mysqli_fetch_array($resultado)) {?>
						<tr>
							<td><?=$linhas['totalPreco']?></td>
						</tr>
				<?php   }?>
			</table>
			<br>
				<p>
					<a href="compra.php">VOLTAR PARA LISTA DE COMPRAS</a>
					<a href="index.php">VOLTAR</a>
				</p>
			<br>
			<table align="center" border="1">
				<tr>
					<td><strong>PRODUTO</strong></td>
					<td><strong>UNID.</strong></td>
					<td><strong>VALOR(R$)</strong></td>
					<td><strong>QUANT.</strong></td>
					<td><strong>TOTAL(R$)</strong></td>
					<td width="10"><strong>REMOVER</strong></td>
				</tr>
				<?php
				$seleciona = mysqli_query($conexao, "SELECT * FROM `produtos` WHERE COMPRAR = 'CARRO'");
					while($campo = mysqli_fetch_array($seleciona)) {?>
						<tr>
							<td><?=$campo["NOME"]?></td>
							<td><?=$campo["UNID"]?></td>
							<td><?=$campo["VALOR"]?></td>
							<td><?=$campo["QTD"]?></td>
							<td><?=$campo["TOTAL"]?></td>
							<td><a href="down.php?id=<?=$campo["ID"]?>">Remover</a></td>
						</tr>
				<?php	}?>	
			</table>	
		</div>
		<footer>
			Desenvolvido por Ronaldo Gama - versão 1.3
		</footer>
	</body>
</html>