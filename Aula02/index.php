<?php

    $carros = array( "Doblo" , "Opala" , "Renegade" );
    
    
    foreach( $carros as $car ){
        print( $car . "<br>");
    }

    echo " Meu carro: $carros[0] <hr>";
    
    print_r( $carros  );
    echo "<hr>"; 
    var_dump( $carros );

   

   