// Arquivo JavaScript com funçôes para envio de IDs para outras páginas processarem na página Fast Shopper. 
// Desenvolvida por Ronaldo Gama - versão 0.4
function editera(altid) {
	
	var formaltera = document.createElement("form");
		formaltera.action = "?b=altera";
		formaltera.method = "post";

		var inputera = document.createElement("input");
		inputera.type = "hidden";
		inputera.value = altid;
		inputera.name = "id";
		formaltera.appendChild(inputera);

		document.body.appendChild(formaltera);

		formaltera.submit();	

}

function verifica(recid) {
	if(confirm("Tem certeza que deseja excluir permanentemente este item?")) {
	
	var formulario = document.createElement("form");
		formulario.action = "?b=deleta";
		formulario.method = "post";

		var inputId = document.createElement("input");
		inputId.type = "hidden";
		inputId.value = recid;
		inputId.name = "id";
		formulario.appendChild(inputId);

		document.body.appendChild(formulario);

		formulario.submit();	

	}
}

function update(updid) {
	
	var formupdate = document.createElement("form");
		formupdate.action = "?b=upall";
		formupdate.method = "post";

		var inpudate = document.createElement("input");
		inpudate.type = "hidden";
		inpudate.value = updid;
		inpudate.name = "id";
		formupdate.appendChild(inpudate);

		document.body.appendChild(formupdate);

		formupdate.submit();	

}

function downera(dowid) {
	
	var formdown = document.createElement("form");
		formdown.action = "?b=down";
		formdown.method = "post";

		var inpudown = document.createElement("input");
		inpudown.type = "hidden";
		inpudown.value = dowid;
		inpudown.name = "id";
		formdown.appendChild(inpudown);

		document.body.appendChild(formdown);

		formdown.submit();	

}

function upera(upeid) {
	
	var formera = document.createElement("form");
		formera.action = "?b=upcar";
		formera.method = "post";

		var inpera = document.createElement("input");
		inpera.type = "hidden";
		inpera.value = upeid;
		inpera.name = "id";
		formera.appendChild(inpera);

		document.body.appendChild(formera);

		formera.submit();	

}
