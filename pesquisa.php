<div class="row">
	<div id="home" class="col-12">
<!-- Arquivo que monta o resultado da pesquisa realizada na lista geral na página Fast Shopper. Desenvolvida por Ronaldo Gama - versão 0.4 -->
		<p>
			<a href="?b=edita">EDITAR LISTA DE COMPRAS</a>
			<a href="insere.php">INSERIR NOVO PRODUTO</a>
			<a href="index.php">VOLTAR</a>
		</p>
		<br>
		<table align="center" border="2">
			<tr>
				<td><strong>NOME</strong></td>
				<td><strong>UNID</strong></td>
				<td><strong>VALOR</strong></td>
				<td><strong>QTD</strong></td>
				<td><strong>TOTAL</strong></td>
				<td><strong>EDITAR?</strong></td>
				<td><strong>COMPRAS</strong></td>
				<td><strong>CARRINHO</strong></td>
			</tr>
			<?php
				$pesq = $_POST['pesquisa'];
					
				include("conecta.php");
			$retor = mysqli_query($conexao, "select * from produtos where NOME LIKE '%$pesq%'");
			while($linha = mysqli_fetch_array($retor)) {?>
				<tr>
					<td><?=$linha["NOME"]?></td>
					<td><?=$linha["UNID"]?></td>
					<td><?=$linha["VALOR"]?></td>
					<td><?=$linha["QTD"]?></td>
					<td><?=$linha["TOTAL"]?></td>
					<td><a href='altera.php?id=<?=$linha["ID"]?>'>Editar</a></td>
					<td><a href="upall.php?id=<?=$campo["ID"]?>">Enviar</a></td>
					<td><a href="upcar.php?id=<?=$campo["ID"]?>">Enviar</a></td>
				</tr>
			<?php	}?>	
		</table>
	</div>
</div>	