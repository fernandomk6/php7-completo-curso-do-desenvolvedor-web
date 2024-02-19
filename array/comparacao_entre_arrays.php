<?php 

$list_1 = ["nome" => "fernando", "idade" => 25];
$list_2 = ["nome" => "fernando", "idade" => 25];
$list_3 = ["idade" => 25, "nome" => "fernando"]; // Mesmos valores, ordem alterada

// Comparação estrita
var_dump($list_1 === $list_2); // Resultado verdadeiro
// Comparação por valor
var_dump($list_1 == $list_2); // Resultado verdadeiro

// Comparação por valor
var_dump($list_1 == $list_3); // Resultado verdadeiro
// Comparação estrita 
var_dump($list_1 === $list_3); // Resultado falso