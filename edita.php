<!DOCTYPE html>
<html>
	<head>
		<title>FastShoper</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
		<header>
			<img src="fast.png" width="250px">
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
			<table align="center" border="1">
				<tr>
					<td><strong>ID</strong></td>
					<td><strong>PRODUTO</strong></td>
					<td><strong>UNID.</strong></td>
					<td><strong>VALOR</strong></td>
					<td><strong>QUANTIDADE</strong></td>
					<td><strong>TOTAL</strong></td>
					<td width="10"><strong>ALTERAR</strong></td>
					<td width="10"><strong>EXCLUIR</strong></td>
				</tr>
				<?php
					include("conecta.php");
				$seleciona = mysqli_query($conexao, "select * from produtos order by id");
					while($campo = mysqli_fetch_array($seleciona)) {?>
						<tr>
							<td><?=$campo["ID"]?></td>
							<td><?=$campo["NOME"]?></td>
							<td><?=$campo["UNID"]?></td>
							<td><?=$campo["VALOR"]?></td>
							<td><?=$campo["QTD"]?></td>
							<td><?=$campo["TOTAL"]?></td>
							<td><a href="altera.php?id=<?=$campo["ID"]?>">Editar</a></td>
							<td align="center"><a href="#" onclick="verifica(<?=$campo["ID"]?>)">Excluir</a></td>
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