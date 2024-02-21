<?php 

/**
 * - Imprimir apenas os valores que contém index par 
 * - Desafio adicional: Resolver com for e foreach
 * - Valores esperados: AAA, CCC, EEE
 */
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

for ($i = 0; $i < count($array); $i++) {
    if ($i % 2 !== 0) continue; 
    echo "{$array[$i]}\r\n";
}

foreach ($array as $i => $element) {
    if ($i % 2 !== 0) continue;
    echo "$element\r\n"; 
}
