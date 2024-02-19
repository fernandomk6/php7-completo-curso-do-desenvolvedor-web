<?php 

/**
 * O laço for deve ser usado quando sabemos o número de repetições
 * a serem usadas.
 * for (expressao_inicial; condicao; incremento)
 * expressao_inicial: é executada apenas na primeira iteracao
 * condicao: se resultar em falso, interrompe o loop 
 * incremento: expressao responsavel por tornar a candicao falsa e encerrar
 * o loop
 */
for ($cont = 1; $cont <= 5; $cont++) {
    echo $cont;
}
echo "\r\n";

/**
 * Iterando matriz com o for
 */

$list = [
    ["a", "b", "c", "d"],
    ["x", "y", "z"]
];

for ($i = 0; $i < count($list); $i++) {
    for ($j = 0; $j < count($list[$i]); $j++) {
        echo "{$list[$i][$j]} ";
    }

    echo "\r\n";
}