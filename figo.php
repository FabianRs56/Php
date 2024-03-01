<?php
    $a=0;
    $b=1;
    $aux;

    for($i=0;$i<30;$i++){
        $aux = $a;
        $a=$b;
        $b=$aux+$a;
        echo "\n $a";
    }


?>