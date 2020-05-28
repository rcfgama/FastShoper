<?php
	/* Arquivo index PHP para tornar o site Fast Shopper dinâmico. Desenvolvido por Ronaldo Gama - versão 0.4 */
	$pag = 'home';

	if (isset($_GET['b'])) {
		$pag = addslashes($_GET['b']);
	}

	include 'header.php';

	switch ($pag) {
		case 'home':
			include 'home.php';
			break;

		case 'edita':
			include 'edita.php';
			break;

		case 'insere':
			include 'insere.php';
			break;
	
		case 'compra':
			include 'compra.php';
			break;
	
		case 'pesquisa':
			include 'pesquisa.php';
			break;

		case 'processa':
			include 'processa.php';
			break;

		case 'clean':
			include 'clean.php';
			break;

		case 'upall':
			include 'upall.php';
			break;

		case 'altera':
			include 'altera.php';
			break;

		case 'deleta':
			include 'deleta.php';
			break;

		case 'salva':
			include 'salva.php';
			break;

		case 'carro':
			include 'carro.php';
			break;

		case 'down':
			include 'down.php';
			break;

		case 'upcar':
			include 'upcar.php';
			break;

		default:
			include 'home.php';
			break;	
	}

	include 'footer.php';