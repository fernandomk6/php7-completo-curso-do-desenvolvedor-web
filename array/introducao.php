<?php 

$dados = ["idade" => 25, "verde", "peso" => 82.45, "amarelo"];
# var_dump($dados["teste"]);

$lista = [
    1,
    4 => 2,
    3 => 3,
    'a' => 4,
    5,
    '9' => 7,
    '06' => 7,
    0 => 9
];

/**
 * 0:9,
 * 4:3,
 * 3:3,
 * 'a':4,
 * 9:7,
 * '06':7,
 * 
 */

 $nomes = ["fernando", "helenice", "pedro", "manoel", "7" => "fulano", "de tal"];
 print_r($nomes);