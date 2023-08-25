<?php 
//ESCOPO GLOBAL

$nome = "Pablo Alves";
$cidade = "Imbituba";
$a = 1;
$b = 2;
$c = 3;

function exibeNome() {
    global $nome;
    echo $nome;
}

exibeNome();
    echo "<hr>";
////////////////////

function exibeCidade() {
    global $cidade;
    echo $cidade;
}

exibeCidade();
    echo "<hr>";


function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}


?>