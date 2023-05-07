<?php
// Uma simples estrutura de repetição com while

echo "======= Ciclo while =======\n";


// inicializando a variável de controle
$controle = 1;

// enquanto a variável de controle for menor ou igual a 10, o bloco de código será executado
while ($controle <= 10) {
    echo "Contador ", $controle, "\n";
    // incrementando a variável de controle
    $controle++;
}

?>