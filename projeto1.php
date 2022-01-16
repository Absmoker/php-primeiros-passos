<?php

$idade = 8;
//$idade +=10 ;

echo $idade . PHP_EOL;

//echo "olá mundo! Minha idade é: $idade". PHP_EOL;

echo "Mostre a sua identificação para poder entrar!". PHP_EOL;

if ($idade >= 18 /*or $idade ==18*/) {
    echo "Você pode entrar." . PHP_EOL;
}else{
        echo "Você tem $idade.\nVocê não pode entrar!". PHP_EOL; 
}