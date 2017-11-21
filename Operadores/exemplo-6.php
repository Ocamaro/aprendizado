<?php
	$a = NULL;
	$b = 8;
	$c = 10;

	echo "<strong> NULL COALESCE</strong><br>";
	echo $a ?? $b ?? $c;
	echo "<br> busca variáveis com valores... por meio de pesquisa linear. Por exemplo: Se A != Nulo faça, senao se B != Nulo faça, ...";
?>