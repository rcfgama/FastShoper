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
			<table align="center" border="2">
				<tr>
					<td><strong>ID</strong></td>
					<td><strong>PRODUTO</strong></td>
					<td><strong>UNID.</strong></td>
					<td><strong>VALOR</strong></td>
					<td><strong>QUANTIDADE</strong></td>
				</tr>
				<?php
				$ident = $_GET['id'];

					include("conecta.php");
				$busca = mysqli_query($conexao, "select * from produtos where id='$ident'");
					while($line = mysqli_fetch_array($busca)) {?>
					<form action="salva.php" method="post">						
						<tr>
							<td>
								<input type="hidden" name="id" placeholder="ID" required class="input" value="<?=$line["ID"]?>">
							</td>
							<td>
								<input type="text" name="nome" placeholder="PRODUTO" required class="input" value="<?=$line["NOME"]?>">
							</td>
							<td>
								<input type="text" name="unid" placeholder="UNID" required class="input" value="<?=$line["UNID"]?>">
							</td>
							<td>
								<input type="text" name="valor" placeholder="VALOR" required class="input" value="<?=$line["VALOR"]?>">
							</td>
							<td>
								<input type="text" name="qtd" placeholder="QTD" required class="input" value="<?=$line["QTD"]?>">
							</td>
						</tr>
						<tr>
							<td>
								<input type="hidden">
							</td>
							<td>
								<input type="hidden">
							</td>
							<td>
								<input align="center" type="submit" value="SALVAR" name="submit">
							</td>
							<td>
								<input type="hidden">
							</td>
							<td>
								<input type="hidden">
							</td>
						</tr>
					</form>	
				<?php	}?>	
			</table>
			<br>
			<a href="index.php">SAIR</a>
		</div>
		<footer>
			Desenvolvido por Ronaldo Gama
		</footer>
	</body>
</html>