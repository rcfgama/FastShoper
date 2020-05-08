//JavaScript Document
function verifica(recid) {
	if(confirm("Tem certeza que deseja excluir permanentemente este item?")) {
		window.location="deleta.php?idexc=" + recid
	}
}

function coletaDados(lista){
	var array_lista = lista;
	for(var x = 0; x <= array_lista.length; x++){
		if(array_lista[x].checked) {
			window.location="upall.php?idlis=" + lista
		}
	}
}