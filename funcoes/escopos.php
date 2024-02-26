<?php 

/**
 * Uma função tem como principal objetivo reutilizar
 * código.
 * 
 * Uma função deve ter uma única responsabilidade.
 */

$variavel = 1;
function teste () {
    $variavel = 2;
    echo "Durante a função $variavel\r\n";
}

echo "Antes da função $variavel\r\n";
teste();
echo "Depois da função $variavel\r\n";

function trocarValor () {
    global $variavel; 
    $variavel = "77";
}

trocarValor();

echo "Depois de trocar o valor $variavel";