<?php 

function console ($any) {
    print_r($any);
    echo "\n";
}

/**
 * - É possível verificar se uma variável está setada usando a função 'isset'.
 * - Uma variável setada com valor null ao ser verificada na função isset, retornará um valor falso.
 * - Em PHP se você usar uma variável que não esteja declarada, você receberá um warning, porém, se 
 * você verificar ela dentro de uma função isset, o arning não será lançado.
 */

$a = null;
if (isset($a)) {
    echo "Está setada";
} else {
    echo "Não está setada";
}
echo "\n";

/**
 * - Variáveis em PHP são case sensitive.
 * - Nome de funções em PHP são case insensitive.
 * - Facilite a sua vida, e sempre escreva tudo em minuscúlo (exceto em convenções).
 * - Perceba que as chamadas da funções echo estão com letras malucas e isso não gera erro.
 */

$a = 'teste';
$A = 'teste2';

eCHO $a;
eCho "\n";
echO $A;

/**
 * - É possível "dessetar" o valor de uma variável, ou seja, fazer com que ela não esteja mais
 * declarada dentro do script.
 */

$meu_nome = 'Fernando';
console($meu_nome);
unset($meu_nome);
// console($meu_nome); // Warning: Undefined variable $meu_nome

if (isset($teste)) {
    console('teste');
}

/**
 * # Regras de identificação de variável
 * - Não podem começar com números, mas pode ter números no eio ou final
 * - Não use caracteres especiais com exceção do _ 
 * - Evite usar acentos '$vár'
 */

$vár = 'O que?';
console($vár); // Sim isso é válido

/**
 * # Desafio equação
 */

$x = (6 * (3 + 2)) ** 2;
$y = 3 * 2;
$t = $x / $y;

$z = (1 - 5) * (2 - 7);
$w = 2;
$r = ($z / $w) ** 2;

$e = ($t - $r) ** 2;
$a = 10 ** 3;
$f = $e / $a;

console($f);
