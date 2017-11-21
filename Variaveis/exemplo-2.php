<?php
	/*

	+ camelcase = padrão de representação de viaráveis no PHP - exemplo de CamelCase: $nomeCompleto, $dataNascimento, $data
	+ O uso do ponto final "." para concatenação de "termos"
	+ isset: verifica se existe informação em alguma variável
	+ unset: remove uma informação da variável

	*/

	$nome = "Fernando";
	$sobrenome = "Figueiredo";

	$nomeCompleto = $nome . " " . $sobrenome;

	echo $nomeCompleto;

	echo "<br/>";

	//unset($nomeCompleto);

		if (isset($nomeCompleto)){

			echo "$nomeCompleto" .  " (Estrutura IF)";
		}
	
?>