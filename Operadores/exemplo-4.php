<?php

echo "Var A: ". $a = 55.0 . "<br>"; 
echo "Var B: " . $b = 55 . "<br>";


var_dump($a == $b);

echo " - comparação de valores sem atentar ao tipo.";


echo "<br>";


var_dump($a === $b);

echo " - comparação de valores e de tipos.";

echo "<br>";

var_dump($a != $b);

echo " - comparação de valores diferentes.";

echo "<br>";


?>