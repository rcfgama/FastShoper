<!DOCTYPE html>
<html>
<!-- Arquivo que monta a lista geral para a edição na página Fast Shoper. Desenvolvida por Ronaldo Gama - versão 1.3 -->
	<head>
		<title>FastShoper</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
		<header>
			<img src="fast.png" width="250px"><strong>LISTA GERAL</strong>
		</header>		
		<div class="home">
			<table align="center" border="1">
				<tr>
					<td><strong>PESQUISAR PRODUTO:</strong></td>
				</tr>
				<tr>
					<td>
						<form method="POST" action="pesquisa.php">
							Pesquisa:<input type="text" name="pesquisa" placeholder="PRODUTO">
							<input type="submit" value="ENVIAR">							
						</form>		
					</td>
				</tr>
			</table>
			<br>
				<p>
					<a href="insere.php">INSERIR NOVO PRODUTO</a>
					<a href="compra.php">IR PARA LISTA DE COMPRAS</a>
					<a href="clean.php">LIMPAR A LISTA DE COMPRAS</a>
					<a href="index.php">VOLTAR</a>
				</p>
			<br>
			<table align="center" border="1">
				<tr>
					<td><strong>ID</strong></td>
					<td><strong>PRODUTO</strong></td>
					<td><strong>UNID.</strong></td>
					<td><strong>VALOR</strong></td>
					<td><strong>QUANTIDADE</strong></td>
					<td><strong>TOTAL</strong></td>
					<td width="10"><strong>COMPRAR</strong></td>
					<td width="10"><strong>ALTERAR</strong></td>
					<td width="10"><strong>EXCLUIR</strong></td>
				</tr>
				<?php
					include("conecta.php");
				$seleciona = mysqli_query($conexao, "SELECT * FROM `produtos` WHERE COMPRAR = 'GERAL'");
					while($campo = mysqli_fetch_array($seleciona)) {?>
						<tr>
							<td><?=$campo["ID"]?></td>
							<td><?=$campo["NOME"]?></td>
							<td><?=$campo["UNID"]?></td>
							<td><?=$campo["VALOR"]?></td>
							<td><?=$campo["QTD"]?></td>
							<td><?=$campo["TOTAL"]?></td>
							<td><a href="upall.php?id=<?=$campo["ID"]?>">Adicionar</a></td>
							<td><a href="altera.php?id=<?=$campo["ID"]?>">Editar</a></td>
							<td align="center"><a href="#" onclick="verifica(<?=$campo["ID"]?>)">Excluir</a></td>
						</tr>
				<?php	}?>	
			</table>
		</div>
		<footer>
			Desenvolvido por Ronaldo Gama - versão 1.3
		</footer>
	</body>
</html>