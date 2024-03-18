<?php

    $x = 5;
    $y = 5.0;
    print(" A soma e: ");
    echo( $x + $y );

    if( $x == $y ){
        echo("<br>Os valores das variaveis sao iguais!");
    }else{
        echo("<br>Os valores das variaveis sao diferentes!");
    }

    if( $x === $y ){
        echo("<br>As variaveis sao identicas!");
    }else{
        echo("<br>As variaveis NAO sao identicas!");
    }

    switch( $x ){
        case $y:
            echo("<br> $x e igual a $y ");
            break;
        case 1:
            echo("<br> valor e 1 ");
            break;
        default:
            echo("<br>Valor default");
    }
    ?>
    <hr>
    <?php 




echo("<hr>");
for( $i = 1; $i < 11 ; $i++ ){
    echo( $i . "<br>");
}
echo("<hr>");
for( $i = 11; $i < 21 ; $i += 2 ){
    echo( $i . "<br> ");
}
echo("<hr>");
for( $i = 100; $i > 0 ; $i -= 3 ){
    echo( $i . "<br>" );
}

echo("<br> Soma de 1 a 100 e: $soma");

$soma = 0;
for( $i = 1; $i <= 100 ; $i++ ){
    $soma += $i;
}
echo("<hr>");
$soma = 0;
for( $i = 1; $i <= 100 ; $i++ ){
    if( $i % 2 == 0 ){
        $soma += $i;
    }
}
echo("<hr>fatorial");
$fatorial = 1;
for( $i = 2; $i <= 5 ; $i++ ){
    $fatorial = $fatorial * $i;
}
echo("<br> O fatorial de 5 e: $fatorial");
