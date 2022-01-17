<?php
for($cont = 0; $cont <= 100; $cont++){
    if($cont % 2 == 0){
        continue;
    }else{
        echo "#$cont" . PHP_EOL;
    }
}