<?php
//////////////////////////////////////////////////
// VARIÁVEIS PRÉ-DEFINIDAS OU ARRAYS SUPER GLOBAL
//
// = Variáveis que podem ser acessadas de qualquer
// = ponto do php.
// + São variáveis pré-definidas no php?
//////////////////////////////////////////////////

	$nome = (int)$_GET["a"];

	var_dump($nome);

//////////////////////////////////////////////////
	
$ip =$_SERVER["REMOTE_ADDR"];

echo $ip;

$nomeCaminho =$_SERVER["SCRIPT_NAME"];

echo "<br/>" . $nomeCaminho

?>