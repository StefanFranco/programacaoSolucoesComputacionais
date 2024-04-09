<?php
require_once("carro.php");
require_once("listagem.php");


foreach ($carros as $carro) {
    $carro->status();
    echo "<hr>";
}
$total = $carro->contar($carros);
echo "<h3>TOTAL DE VEICULOS: " . $total . "</h3><hr>"; 





