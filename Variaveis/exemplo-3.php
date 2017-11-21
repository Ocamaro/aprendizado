<?php
/*
	*Rever aula, porque não encontrei na revisão as oito variáveis comentadas...

	########## OITO TIPOS DE VARIÁVEIS ############
	+ Apesar do PHP não ser fortemente tipado, ele apresenta oito tipos de variáveis separados em três categorias: 
		- 1) Tipo Básico;
		- 2) Tipo Composto;
		- 3) Tipo Especial;
*/

//////////// Tipo Básico
$nome = 'Fernando'; //String
$dataNascimento = 1994; //Int
$salario = 14000.99; //Float



/////////// Tipo Composto
$frutas = array ('limão', 'abacaxi', 'pera'); //Array
echo "Array: ". $frutas[2];



/*
$data = new DateTime();
echo "<br/><br/><br/>";
var_dump ($data);
*/

//////////// Tipo Especial

$arquivo = fopen("exemplo-3.php", "r");

echo "<br/><br/><br/>";

echo "<strong>Var tipo especial: </strong>"; 
	var_dump($arquivo);





$varNulo = NULL; //Variáveis nulas
$varVazia = "";  //Variáveis vazias






?>