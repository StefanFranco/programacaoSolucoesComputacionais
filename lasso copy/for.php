<?php
    echo "Laço de repetição FOR <br>";

    $frutas = array("MAçã","Banana","Morango","Uva", "Abacaxi", "Pera");
    $size = count($frutas); //conta quantas frutas tem

    //imprimir o meu array na tela 
    for($i = 0; $i < $size; $i++){
        echo $frutas[$i] . "<br>";
    }