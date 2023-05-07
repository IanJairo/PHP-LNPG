<?php

/*"echo" é a forma padrão para o usuario imprimir uma mensagem ou variavel no console, com echo o usuario pode passar varios
argumentos que serao impressos separados por virgula*/
echo "Hello World\n", "Hello World2\n";

/*Já o comando "print" ele faz a mesma funcao do "echo" com algumas diferenças, o comando print vai reotrnar o valor 1 por padrao, 
por esse motivo ele é ligeiramente mais lento quando comparado com o comando "echo", com o print o usuario so pode passar um argumento por vez, 
por conta disso o "print" se torna mais viavel para ser utlizado em expressoes*/
print "Hello World com print\n";

/*O comando printf é ulitizado quando usuario quer passar uma string já formatada, nesse caso o codigo contém dois especificadores 
de formato: %d para a quantidade de pessoas (um número inteiro) e %s para o localização (uma string), apos isso o comando "printf" 
exibe a string formatada na tela.*/
$formato = "Tem %d pessoas no %s\n";
printf($formato,$num=5,$localizacao="parque");


$dinheiro1 = 68.75;
$dinheiro2 = 54.35;
$dinheiro = $dinheiro1 + $dinheiro2;

/*Aqui temos outro exemplo so que dessa vez com o comando "sprintf", a diferença entre os dois é que o "printf" exibe a string formatada 
diretamente na tela, enquanto o "sprintf" armazena a string formatada em uma variável para ser usada posteriormente.*/
echo $formatado = sprintf("%01.2f", $dinheiro);

?>