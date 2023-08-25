<?php

$equipe = array(
    "programadores" => array(1=>"Pedro", 2=>"Gustavo", 3=>"Guilherme"),
    "suporte" => array(1=>"Pablo", 2=>"Guilherme"));

foreach($equipe["programadores"] as $indice => $valor) {
    echo $indice.":".$valor."<br>";
}
    echo "<hr>";

foreach($equipe["suporte"] as $indice => $valor) {
        echo $indice.":".$valor."<br>";
}
echo "<hr>";

?>