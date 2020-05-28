<div class="row">
	<div id="home" class="col-12">
	<!-- Arquivo que monta a lista de compras na página Fast Shopper. Desenvolvida por Ronaldo Gama - versão 0.4 -->
		<table align="center" border="1">
		<!-- Quadro com o total de itens na lista de compras e total "no carrinho"-->	
			<tr>
				<td><strong>TOTAL ESTIMADO(R$)</strong></td>
			</tr>
			<?php
				include("conecta.php");
				$resultado = mysqli_query($conexao, "SELECT SUM(round(TOTAL,2)) AS totalPreco FROM produtos WHERE COMPRAR = 'CARRO'");
				while($linhas = mysqli_fetch_array($resultado)) {
				$resultEst = mysqli_query($conexao, "SELECT SUM(round(TOTAL,2)) AS totalEstm FROM produtos WHERE COMPRAR = 'COMPRA'");
				while($linEst = mysqli_fetch_array($resultEst)) {?>
					<tr>
						<td>R$ <?php echo number_format(($linEst['totalEstm']+$linhas['totalPreco']),2,",",".");?></td>
					</tr>
			<?php   }?>
			<tr>
				<td><strong>TOTAL DA COMPRA(R$)</strong></td>
			</tr>
					<tr>
						<td>R$ <?php echo number_format($linhas['totalPreco'],2,",",".");?></td>
					</tr>
			<?php   }?>
		</table>
		<br>
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
		<br>
		<!-- Div responsiva com bootstap para os botões -->
		<div class="row">
			<div id="butleft" class="col-sm-6 col-xs-12">
				<a href="?b=insere">INSERIR NOVO PRODUTO</a>
				<a href="?b=carro">IR PRA CARRINHO</a>
			</div>
			<div id="butrght" class="col-sm-6 col-xs-12">
				<a href="?b=edita">EDITAR LISTA</a>
				<a href="index.php">VOLTAR</a>
			</div>
		</div>
		<br>
		<!-- Tabela que carrega todos os itens na lista de compra -->
		<table align="center" border="1">
			<tr>
				<td><strong>PRODUTO</strong></td>
				<td><strong>UNID.</strong></td>
				<td><strong>VALOR(R$)</strong></td>
				<td><strong>QUANT.</strong></td>
				<td><strong>TOTAL(R$)</strong></td>
				<td width="10"><strong>ALTERAR</strong></td>
				<td width="10"><strong>CARRINHO</strong></td>
				<td width="10"><strong>REMOVER</strong></td>
			</tr>
			<?php
			$seleciona = mysqli_query($conexao, "SELECT * FROM `produtos` WHERE COMPRAR = 'COMPRA'");
				while($campo = mysqli_fetch_array($seleciona)) {?>
					<tr>
						<td><?=$campo["NOME"]?></td>
						<td><?=$campo["UNID"]?></td>
						<td>R$ <?php echo number_format($campo["VALOR"],2,",",".");?></td>
						<td><?=$campo["QTD"]?></td>
						<td>R$ <?php echo number_format($campo["TOTAL"],2,",",".");?></td>
						<td align="center"><a href="#" onclick="editera(<?=$campo["ID"]?>)">Editar</a></td>
						<td align="center"><a href="#" onclick="upera(<?=$campo["ID"]?>)">Enviar</a></td>
						<td align="center"><a href="#" onclick="downera(<?=$campo["ID"]?>)">Remover</a></td>
					</tr>
			<?php	}?>	
		</table>	
	</div>
</div>