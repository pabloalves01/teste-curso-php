<?php
// Arrays

$carros = array(1=>"BMW", 2=>"Porsche", 3=>"Nivus", 4=>"Jaguar");
$carros[] = "Amarok";
echo $carros[3];

echo "<br>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
echo $motos[5];
echo "<br>";

$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);
echo "<hr>";

// Count
$totalClientes = count($clientes);
echo ('A quantidade de motos é ');
echo $totalClientes;

//Foreach

foreach($carros as $valor) {
    echo $valor."<br>";
}
echo "<hr>";

//Arrays Associativos

$pessoa = array("Nome"=> "pablo", "idade"=> 17, "altura"=> 1.75);
$pessoa["cidade"]= "imbituba";
echo $pessoa["cidade"];

echo "<br>";

echo "<hr>";

foreach($pessoa as $indice => $valor) {
    echo $indice.":".$valor."<br>";
}

//Arrays Multidimensionais

$times = array(
        "cariocas"=> array("campeao"=>"flamengo", "vice"=>"vasco", "terceiro"=>"fluminense", "quarto"=>"botafogo"),
        "paulistas"=> array("melhor"=>"Corinthians", "segundo melhor"=>"São Paulo", "terceiro melhor"=>"Palmeiras"),
        "baianos"=> array(1=>"Bahia", 2=>"Vitoria", 9=>"Itabuna"));

echo "<hr>";




foreach($times["paulistas"] as $indice => $valor) {
    echo $indice.":".$valor."<br>";
}

echo "<hr>";

foreach($times["cariocas"] as $indice => $valor) {
        echo $indice.":".$valor."<br>";
}

echo "<hr>";

foreach($times["baianos"] as $indice => $valor) {
    echo $indice.":".$valor."<br>";
}


?>