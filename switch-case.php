<?php

$nome = 'Alinee';

switch($nome) {
    case 'Pablo';
    echo 'Seu nome é Pablo';
    break;

    case 'Gustavo';
    echo 'Seu nome é Gustavo';
    break;

    case 'Pedro';
    echo 'Seu nome é Pedro';
    break;

    default: //DEFINE UM VALOR PADRÃO, QUE NÃO MUDA.
        echo "Sua cor preferida não é vermelho, verde ou azul!";
}


// MESCLAR DUAS CONDIÇÕES TAMBÉM FUNCIONA.

// if($nome == "Aline") {
//     echo "Seu nome é aline";
// }
// else 
// {
//     echo "Seu nome não é aline!";
// }



?>