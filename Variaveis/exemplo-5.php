<?php
/*
	### Escopo de Variável ###
	+ Escopo local: $nome
	+ Escopo Global:
	+ O escopo é dado por meio dos {}, como também pela abertura de itens como PHP - resumindo... podemos definir escopos como territórios.
*/

$nome = "Fernando";

	function Funcao1 (){
		// para ficar claro o conceito, utilize "//global $nome"
		global $nome;

		echo "Primeiro escopo: " . $nome;

	}

	function Funcao2 (){

		echo "<br/>Segundo Escopo: ";
		echo $nome;

	}

Funcao1 ();

Funcao2 ();
?>