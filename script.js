//JavaScript Document
function verifica(recid) {
	if(confirm("Tem certeza que deseja excluir permanentemente este item?")) {
		window.location="deleta.php?idexc=" + recid
	}
}