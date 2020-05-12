// Arquivo JavaScript com função para confirmar a exclusão de produtos da lista na página Fast Shoper. Desenvolvida por Ronaldo Gama - versão 1.3
function verifica(recid) {
	if(confirm("Tem certeza que deseja excluir permanentemente este item?")) {
		window.location="deleta.php?idexc=" + recid
	}
}
