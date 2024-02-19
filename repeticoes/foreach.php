<?php 

/**
 * Foreach deve ser utilizado quando queremos iterar sobre 
 * todos os itens do array
 */

/**
 * Iteração sobre lista não indexadas
 */
$semana = [
    "Domingo",
    "Segunda",
    "Terça",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sábado"
];

foreach ($semana as $dia) {
    echo "$dia\r\n";
}

echo "---\r\n";

/**
 * Exemplo de foreach em matriz
 */
$pessoas = [
    ["nome" => "Fernando", "idade" => 25],
    ["nome" => "Pedro", "idade" => 23],
    ["nome" => "Helenice", "idade" => 55],
    ["nome" => "Manoel", "idade" => 60]
];

foreach ($pessoas as $key => $pessoa) {
    echo "[$key] => {$pessoa["nome"]}\r\n";
}

echo "---\r\n";

/**
 * Exemplo de foreach em arrays associativos
 */

$moto = [
    "modelo" => "XTZ Lander",
    "ano" => "2014",
    "cor" => "Preta"
];

foreach ($moto as $key => $value) {
    echo "$value\r\n";
}

echo "---\r\n";

/**
 * Foreach por referência 
 */

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($numeros as &$numero) {
    $numero *= 2;
}

print_r($numeros);

/**
 * Exemplo 2 de arrays por referencia
 */

$motos = [
    [
        "modelo" => "XTZ Lander",
        "ano" => "2014",
        "cor" => "Preta"
    ],

    [
        "modelo" => "XT66",
        "ano" => "2018",
        "cor" => "Preta"
    ],
];

foreach ($motos as &$moto) {

    $moto["modelo"] = strpos($moto["modelo"], "Lander") !== false 
        ? "BLOQUEADA" 
        : $moto["modelo"]
    ;
}

print_r($motos);

