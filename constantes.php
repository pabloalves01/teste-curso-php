<?php
// Constantes

define("NOME", "Pablo Alves");
define("IDADE", 24);
define("ALTURA", 1.89);
define("CASADO", true);

define("TIMES", ['vasco', 'flamengo', 'santos']);
var_dump(TIMES);

echo 'Meu nome é '.NOME.' e minha idade é ' .IDADE. ', minha altura é '.ALTURA. '.';
echo "<hr>";
echo TIMES[1];
?>