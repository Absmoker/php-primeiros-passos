<?php
//atividade 1 números ípares
// for($cont = 0; $cont <= 100; $cont++){
//     if($cont % 2 != 0){
//         echo "#$cont" . PHP_EOL;
//     }
// }

// atividade 2 tabuada
// $number = 2;
// for( $i = 1 ; $i < 10 ; $i++){
//     echo "$number x $i = " . $number*$i . PHP_EOL;
// }

//atividade 3 IMC
$altura = 1.73 ;
$peso = 75 ;
if($peso/($altura**2) < 16){
    echo "Subpeso severo!". PHP_EOL;
    echo $peso/($altura**2). PHP_EOL;
}else if (($peso/($altura**2) >= 16) and ($peso/($altura**2) < 20)){
    echo "Subpeso!". PHP_EOL;
    echo $peso/($altura**2). PHP_EOL;
}else if ($peso/($altura**2) >= 20 and $peso/($altura**2) < 25){
    echo "Normal!". PHP_EOL;
    echo $peso/($altura**2). PHP_EOL;
}else if ($peso/($altura**2) >= 25 and $peso/($altura**2) < 30){
    echo "Sobrepeso!". PHP_EOL;
    echo $peso/($altura**2). PHP_EOL;
}else if ($peso/($altura**2) >= 30 and $peso/($altura**2) < 40){
    echo "Obeso!". PHP_EOL;
    echo $peso/($altura**2). PHP_EOL;
}else{
    echo "Obeso mórbido" . PHP_EOL;
    echo $peso/($altura**2). PHP_EOL;
}
