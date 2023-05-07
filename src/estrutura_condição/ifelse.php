<?php

//Inicia declarando a variavel
$numero = 2;

//Indica o if com a condição entre parenteses e logo seguida a ação que o mesmo ira realizar
if ($numero == 10):
    echo "É igual a 10\n";
elseif($numero < 10):
    echo "É menor que 10\n";
else:
    echo "É maior que 10\n";
//Ao final da execucao sempre colocar o endif para indicar o fim da estrutura
endif;

//Aqui temos outro exemplo agora com um operador ternario
//Declaramos a variavel
$media = 4;

//Em seguida exbimos em uma linha toda a opecao que vamos fazer
/*Iniciamos colocando entre parenteses a condicao a ser seguida, logo apos utilizamos "?" para indicar o if e o que 
sera impresso no terminal caso a condicao seja verdadeira, em seguida utilizamos o ":" para indicar o else e imprimir no terminal caso a condicao seja falsa*/
echo ($media >= 7) ? "Aprovado!" : "Reprovado!";

?>