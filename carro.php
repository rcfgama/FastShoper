<div class="row">
	<div id="home" class="col-12">
	<!-- Arquivo que monta a lista carrinho na página Fast Shopper. Desenvolvido por Ronaldo Gama - versão 0.4 -->
		<table align="center" border="1">
		<!-- Quadro com total da compra -->
			<tr>
				<td><strong>TOTAL DA COMPRA(R$)</strong></td>
			</tr>
			<?php
				include("conecta.php");
				$resultado = mysqli_query($conexao, "SELECT SUM(round(TOTAL,2)) AS totalPreco FROM produtos WHERE COMPRAR = 'CARRO'");
			$linhas = mysqli_num_rows($resultado);
				while($linhas = mysqli_fetch_array($resultado)) {?>
					<tr>
						<td>R$ <?php echo number_format($linhas['totalPreco'],2,",",".");?></td>
					</tr>
			<?php   }?>
		</table>
		<!-- Botões de navegação -->
		<br>
			<p>
				<a href="?b=compra">VOLTAR PARA LISTA DE COMPRAS</a>
				<a href="index.php">VOLTAR</a>
			</p>
		<br>
		<!-- Tabela com a lista de itens no "carrinho" -->
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
						<td>R$ <?php echo number_format($campo["VALOR"],2,",",".");?></td>
						<td><?=$campo["QTD"]?></td>
						<td>R$ <?php echo number_format($campo["TOTAL"],2,",",".");?></td>
						<td align="center"><a href="#" onclick="downera(<?=$campo["ID"]?>)">Remover</a></td>
					</tr>
			<?php	}?>	
		</table>	
	</div>
</div>