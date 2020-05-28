<div class="row">
	<div id="home" class="col-12">	
	<!-- Arquivo que monta a lista geral para a edição na página Fast Shopper. Desenvolvida por Ronaldo Gama - versão 0.4 -->
		<table align="center" border="1">
		<!-- Quadro com pesquisa dos produtos -->
			<tr>
				<td><strong>PESQUISAR PRODUTO:</strong></td>
			</tr>
			<tr>
				<td>
					<form method="POST" action="?b=pesquisa">
						Pesquisa:<input type="text" name="pesquisa" placeholder="PRODUTO">
						<input type="submit" value="ENVIAR">							
					</form>		
				</td>
			</tr>
		</table>
		<!-- Div responsiva com bootstrap para os botões -->
		<br>
		<div class="row">
			<div id="butleft" class="col-sm-6 col-xs-12">
				<a href="?b=insere">INSERIR NOVO PRODUTO</a>
				<a href="?b=compra">IR PARA LISTA DE COMPRAS</a>
			</div>
			<div id="butrght" class="col-sm-6 col-xs-12">
				<a href="?b=clean">LIMPAR A LISTA DE COMPRAS</a>
				<a href="index.php">VOLTAR</a>
			</div>
		</div>
		<br>
		<!-- Tabela que monta a lista geral de produtos -->
		<table align="center" border="1">
			<tr>
				<td><strong>PRODUTO</strong></td>
				<td><strong>UNID.</strong></td>
				<td><strong>VALOR(R$)</strong></td>
				<td><strong>QTD</strong></td>
				<td><strong>TOTAL(R$)</strong></td>
				<td width="10"><strong>COMPRAR</strong></td>
				<td width="10"><strong>ALTERAR</strong></td>
				<td width="10"><strong>EXCLUIR</strong></td>
			</tr>
			<?php
				include("conecta.php");
			$seleciona = mysqli_query($conexao, "SELECT * FROM `produtos` WHERE COMPRAR = 'GERAL'");
				while($campo = mysqli_fetch_array($seleciona)) {?>
					<tr>
						<td><?=$campo["NOME"]?></td>
						<td><?=$campo["UNID"]?></td>
						<td>R$ <?php echo number_format($campo["VALOR"],2,",",".");?></td>
						<td><?=$campo["QTD"]?></td>
						<td>R$ <?php echo number_format($campo["TOTAL"],2,",",".");?></td>
						<td align="center"><a href="#" onclick="update(<?=$campo["ID"]?>)">Adicionar</a></td>
						<td align="center"><a href="#" onclick="editera(<?=$campo["ID"]?>)">Editar</a></td>
						<td align="center"><a href="#" onclick="verifica(<?=$campo["ID"]?>)">Excluir</a></td>
					</tr>
			<?php	}?>	
		</table>
	</div>
</div>