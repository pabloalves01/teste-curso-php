<?php
$nome = "Olá mundo!";
var_dump($nome); // Adicione a variável que deseja analisar

if (is_string($nome)):
    echo "É uma string"; // Corrija o sinal de igual
else:
    echo "Não é uma string"; // Corrija o sinal de igual
endif;
echo "<hr>";

 // int

$idade = 17;
var_dump($idade);

if(is_int($idade)):
    echo "<strong> É um inteiro <strong>";
else:
    echo "Não é um inteiro";
endif;
echo "<hr>";

// FLOAT

$altura = 1.75;
var_dump($altura);

if(is_float($altura)) {
    echo "É um float";
} else {
    echo "Não é um float";
} 
echo "<hr>";

//bool

$admin = true;
var_dump($admin);

if(is_bool($admin)) {
    echo "É verdadeiro";
} else {
    echo "É falso";
}
echo "<hr>";

$carros = array("Gol", "Uno", "Camaro", 12, 20.6, true);
var_dump($carros);
if(is_array($carros)) {
    echo "É um array!"; 
} else {
    echo "Não é um array!";
}

//object

class CLiente {
    public $nome;
    public function atribuirNome($nome) {
        $nome2 = "Pablo";
        $this->$nome = $nome;
        
    }
}
echo "<hr>";

$cliente = new Cliente();
$cliente->atribuirNome("Rodrigo");
var_dump($cliente);

if(is_object($cliente)) {
    echo "É um objeto!"; 
} else {
    echo "Não é um objeto!";
}

?>