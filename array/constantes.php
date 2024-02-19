<?php 

/**
 * Não é possível atribuir novos valores, nem modificar os valores existentes
 * em um array constante
 */

const FRUTAS = [
    "banana",
    "maçã",
    "melão"
];

print_r(FRUTAS);

// FRUTAS[] = "Abacate"; Gera erro 

// Também é possível usar a sintaxe com define 
define('CARROS', ["Lancer", "Gol", "Pajero"]);

print_r(CARROS);
