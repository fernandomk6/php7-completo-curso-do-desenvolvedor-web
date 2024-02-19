<?php 

/**
 * Usar o laço for para criar a seguinte saída no console:
 * #
 * ##
 * ###
 * ####
 * #####
 * 
 * 1) Pode usar incremento $i++;
 * 2) Não pode usar incremento $i++;
 */

$message = "";
for ($i = 1; $i <= 5; $i++) {
    $message .= "#";
    echo "{$message}\r\n";
}

echo "\r\n";

for ($i = "#"; $i !== "######"; $i .= "#") {
    echo "{$i}\r\n";
}