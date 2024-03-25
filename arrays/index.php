<?php
//trabalhando com arrays
$numeros = array(1,2,3,4,5,6,7,8,9);
$num = [1,2,3,4,5,6,7,8,9];
$semana = array("Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sabado");




echo $semana[4];
//funçoes embutidas
echo "<br>";
echo count($numeros); 
echo "<br>";
echo sizeof($semana);

//data
date_default_timezone_set("America/Sao_Paulo");
$hoje = date("w, d/m/Y - H:i:s ");
echo "<br>";
echo "Hoje e $hoje";







