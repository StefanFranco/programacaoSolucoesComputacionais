<?php
// metodo que recebe parametro e tem retorno 
function somar($x , $y ){
    return $x + $y;
}

// metodo que NAO recebe parametro e tem retorno 
function imprimirMeuNome(){
    echo "Stefan Franco dos Santos";
}
// metodo que NAO recebe parametro e tem retorno 
function getPI(){
    return 3.14;
}


// metodo que NAO recebe parametro e NAO tem retorno 
function imprimirAreaCirculo( $raio ){
    $area = getPI() * ($raio * $raio); 
    echo "<br>Area do circulo com raio $raio e: ".$area;
}
imprimirMeuNome();
//$result = somar( 5 , 10 );
$v1 = $_GET["x"];
$v2 = $_GET["v"];
$result = somar( $v1 , $v2 );
echo "<br> Resultado: ".$result;
echo "<hr>Valor do PI: ".getPI(); 
imprimirAreaCirculo( 5 );
imprimirAreaCirculo( 10 );

