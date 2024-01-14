<?php 

// Desafio switch

$param = '10';
$conversao = 'km > m';

switch ($conversao) {
    case 'km > m': {
        $m = $param * 1000;
        echo "{$param}km corresponde a {$m} metros";
        break;
    }
    default: {
        echo "Resultado inválido";
    }
}