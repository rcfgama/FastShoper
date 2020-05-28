<div class="row">
	<div id="home" class="col-12">
	<!-- Arquivo para editar os produtos na lista geral da página Fast Shopper. Desenvolvido por Ronaldo Gama. versão 0.4 -->
		<table align="center" border="1">
			<tr>
				<td><strong>PRODUTO</strong></td>
				<td><strong>UNID.</strong></td>
				<td><strong>VALOR</strong></td>
	 			<td><strong>QUANTIDADE</strong></td>
	 			<td><strong>SALVAR?</strong></td>
			</tr>
			<?php
			$ident = $_POST['id'];

				include("conecta.php");
			$busca = mysqli_query($conexao, "select * from produtos where id='$ident'");
				while($line = mysqli_fetch_array($busca)) {?>
				<form action="?b=salva" method="post">						
					<tr>
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
						<td>
							<input type="hidden" name="id" placeholder="ID" required class="input" value="<?=$line["ID"]?>">
							<input align="center" type="submit" value="SALVAR" name="submit">
						</td>
					</tr>
				</form>	
			<?php	}?>	
		</table>
		<br>
		<a href="?b=edita">VOLTAR PARA EDITAR LISTA</a>
		<a href="index.php">SAIR</a>
	</div>
</div>