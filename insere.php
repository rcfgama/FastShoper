<div class="row">
	<div id="home" class="col-12">
	<!-- Arquivo para inserir um novo item na página Fast Shopper. Desenvolvida por Ronaldo Gama - versão 0.4 -->
		<p>
			<a href="?b=edita">IR PARA EDITAR LISTA</a>
			<a href="index.php">VOLTAR</a>
		</p>
		<br>
		<p>Obs.: Antes de inserir um novo item na lista, certifique-se que o mesmo já não exista, realizando uma pesquisa.</p>
		<br>
		<form action="?b=processa" method="post">
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
	</div>
</div>