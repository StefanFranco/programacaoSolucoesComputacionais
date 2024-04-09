<?php

include("clsCidade.php");
include_once("clsPessoa.php");

$c1 = new Cidade();
$c2 = new Cidade("Porto Alegre");

$p1 = new Pessoa( 1 , "João" );
$p2 = new Pessoa( 2 , "Maria", 1.75);
$p3 = new Pessoa( 3 , "Jose" , 1.81 , $c1 );
$p4 = new Pessoa( 4 ,"Julia" , 1.90 , $c2 );
$p5 = new Pessoa( 5 ,"Suzy" , 1.70 , new Cidade() );
$p6 = new Pessoa( 6 ,"Iracema" , 1.68 , new Cidade("Cacequi") );

print( "<br>".$p1->nome." - ".$p1->cidade->nome );
print( "<br>".$p2->nome." - ".$p2->cidade->nome );
print( "<br>".$p3->nome." - ".$p3->cidade->nome );
print( "<br>".$p4->nome." - ".$p4->cidade->nome );
print( "<br>".$p5->nome." - ".$p5->cidade->nome );
print( "<br>".$p6->nome." - ".$p6->cidade->nome );
