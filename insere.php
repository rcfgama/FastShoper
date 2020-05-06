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
			<form action="processa.php" method="post">
				<p><label>Escolha tipo do Estabelecimento:</label><br>
				<select name="Estabelecimento">
					<option value="1">1 - MERCADO</option>
					<option value="2">2 - HORTIFRUTI</option>
				</select></p>
				<br>
				<p><label>Nome do Produto:</label><br>
				<input type="text" name="nome" placeholder="Ex.: Maminha"></p>
				<br>
				<p><label>Tipo de Unidade:</label><br>
				<input type="text" name="unid" placeholder="Ex.: kg"></p>
				<br>
				<p><label>Preço (R$ - somente números e usar '.' para separa as casas decimais):</label><br>
				<input type="text" name="valor" placeholder="R$"></p>
				<br>
				<p><label>Quantidade:</label><br>
				<input type="text" name="qtd" placeholder="Nº"></p>
				<br>
				<p><input type="submit" value="INSERIR" name="submit"></p>
			</form>
			<br>
			<a href="edita.php">SAIR</a>
		</div>
		<footer>
			Desenvolvido por Ronaldo Gama
		</footer>
	</body>
</html>