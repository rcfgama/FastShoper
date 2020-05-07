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
					<td><strong>NOME</strong></td>
					<td><strong>UNID</strong></td>
					<td><strong>VALOR</strong></td>
					<td><strong>QTD</strong></td>
					<td><strong>TOTAL</strong></td>
					<td><strong>EDITAR?</strong></td>
				</tr>
					<?php
						$pesq = $_POST['pesquisa'];
							
						include("conecta.php");
					$retor = mysqli_query($conexao, "select * from produtos where NOME LIKE '%$pesq%'");
					while($linha = mysqli_fetch_array($retor)) {?>
					<form action="altera.php" method="post">						
						<tr>
							<td><?=$linha["NOME"]?></td>
							<td><?=$linha["UNID"]?></td>
							<td><?=$linha["VALOR"]?></td>
							<td><?=$linha["QTD"]?></td>
							<td><?=$linha["TOTAL"]?></td>
							<td><a href='altera.php?id=<?=$linha["ID"]?>'>Editar</a></td>
						</tr>
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