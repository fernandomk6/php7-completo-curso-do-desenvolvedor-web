<?php 

$a = 0;
function console (...$values) {
    foreach ($values as $index => $value) {
        $index_type = gettype($index);
        $value_type = gettype($value);
        var_dump($value);
    }
    return true;
}

/**
 * Se houver conflitos de chave, o operador do lado direito terá prioridade
 * ou seja, a chave que será adicionada ao novo array é sempre a chave do
 * operador que está do lado direito
 */
$dados1 = [
    "nome" => "josé",
    "idade" => 28,
    "naturalidade" => "Pacatuba"
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

/**
 * É possível fazer um merge de arrays em php usando o operador 
 * de adição. Porém, isso não é aconselhavél pois causa efeitos colaterais
 * difíceis de serem identificado
 */
$dadosCompletos = $dados1 + $dados2;

// print_r($dadosCompletos);

/**
 * Como descobrir se uma vasriável é do tipo array
 */
// print_r(is_array($dadosCompletos) === true);

/**
 * Como descobrir o número de elementos de um array
 */
$list = ["Fernando", 2 => "Pedro", "Maria", 9 => "José", true => "Boolean"];
// print_r(count($list));

console(1,2,23,4,5,5,84,["teste"=> "valor", true]);

// O anset desfaz a declaração da variável, remove aquela definição.
// É como se a variável, propriedade ou index, não tivessem sido 
// declarados / atribuidos
unset($list[0]);
console($list);

/**
 * A função array_merge, une todos os elementos dos arrays pasados 
 * como argumentos
 */

 $impares = [1, 3, 5, 7, 9];
 $pares = [2, 4, 6, 8, 10];
 $numeros = array_merge($pares, $impares);
 print_r($numeros);

 /**
  * Array sort ordena o array
  */
sort($numeros);
print_r($numeros);