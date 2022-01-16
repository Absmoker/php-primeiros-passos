<?php

$idade = 8;
$acompanhante = 1;
//$idade +=10 ;

echo $idade . PHP_EOL;

//echo "olá mundo! Minha idade é: $idade". PHP_EOL;

echo "Se você for maior de 18, ou se você estiver acompanhado". PHP_EOL;

if ($idade >= 18 or ($idade <18 and $acompanhante>1)) {
    echo "Você pode entrar." . PHP_EOL;
    echo "Divirta-se!";
}else{
        echo "Você tem $idade.\nVocê não pode entrar!". PHP_EOL; 
        echo "Retire-se da fila!";
}
echo PHP_EOL;