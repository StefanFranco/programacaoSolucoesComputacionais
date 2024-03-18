<?php
    echo "Laço de repetição while";

    $i = 1;

    while ($i > 20) {
        echo "<br>" . $i;
       //condicional
       if($i < 18) {
            echo " = Menor de idade";
       }else{
            echo " = Maior de Idade";
       }
        $i++;
    }