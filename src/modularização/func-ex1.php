<?php

echo "======= Exemplo de função =======\n";

// Uma simples função que retorna a soma de dois números

function soma($a, $b) {
    return $a + $b;
}

// lendo os valores
$a = readline("Digite o primeiro número: ");
$b = readline("Digite o segundo número: ");

// chamando a função
$resultado_soma = soma($a, $b);

echo 'O resultado da soma: ', $resultado_soma, "\n";


?>