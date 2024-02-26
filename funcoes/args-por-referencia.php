<?php 

$nome = "Fernando";

# Recebendo um parametro por referência
function alterarNome (&$nomeAntigo, $nomeNovo) {
    $nomeAntigo = $nomeNovo;
}


echo "nome antes $nome \r\n";
alterarNome($nome, "Pedro");
echo "nome depois $nome \r\n";

# Atribuição por referência 

$moto = "lander";
$carro = "lancer";
$moto =& $carro;

echo "$moto \r\n";
echo "$carro \r\n";

$moto = "fusca";

echo "$moto \r\n";
echo "$carro \r\n";