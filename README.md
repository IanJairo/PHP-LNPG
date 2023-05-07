# PHP-LNPG
 
## Contexto Histórico

## Características Gerais



## Instalação
Para saber mais sobre como instalar a linguagem na sua máquina, [clique aqui](./github-pages/instalacao.md) para ir ao guia.

## Sintaxe

### Como realizar um Hello World
Para realizar um "Hello World" podemos utilizar duas formas: "echo" ou "print". "echo" é a forma padrão para o usuario imprimir uma mensagem ou variável no console, com echo o usuario pode passar vários
argumentos que serão impressos separados por virgula

```php
echo "Hello World\n", "Hello World2\n";
```

Já o comando "print" ele faz a mesma funcao do "echo" com algumas diferenças, o comando print vai reotrnar o valor 1 por padrao, 
por esse motivo ele é ligeiramente mais lento quando comparado com o comando "echo", com o print o usuario so pode passar um argumento por vez, 
por conta disso o "print" se torna mais viavel para ser utlizado em expressoes.

```php
print "Hello World com print\n";
```

O comando "print" por sua vez possui algumas variações, o comando "printf" é ulitizado quando usuário quer passar uma string já formatada, nesse caso o código contém dois especificadores 
de formato: %d para a quantidade de pessoas (um número inteiro) e %s para o localização (uma string), apos isso o comando "printf" 
exibe a string formatada na tela.

```php
$formato = "Tem %d pessoas no %s\n";
printf($formato,$num=5,$localizacao="parque");
```
Aqui temos outro exemplo so que dessa vez com o comando "sprintf", a diferença entre os dois é que o "printf" exibe a string formatada 
diretamente na tela, enquanto o "sprintf" armazena a string formatada em uma variável para ser usada posteriormente.

```php
$dinheiro1 = 68.75;
$dinheiro2 = 54.35;
$dinheiro = $dinheiro1 + $dinheiro2;

echo $formatado = sprintf("%01.2f", $dinheiro);
```

### Estruturas de Condição
Uma estrutura de condição é uma construção de programação que permite que um bloco de código seja executado apenas se uma determinada condição for verdadeira. Existem duas principais estruturas de condição em PHP: "if" e "switch". 

### ***If/elseif/else***
A estrutura "if" é usada para executar um bloco de código somente se uma determinada condição for verdadeira. 

Iniciamos indicando o "if" com a condição entre parenteses e logo seguida a ação que o mesmo irá realizar, se a condição for verdadeira, a mensagem "É igual a 10" será exibida na tela pela instrução "echo", caso a condição seja falsa, o próximo bloco "elseif" será avaliado, se a condição for verdadeira, a mensagem "É menor que 10" será exibida na tela, caso contrário, ou seja, se ambas as condições anteriores forem falsas, o bloco "else" é executado, exibindo a mensagem "É maior que 10" :

```php
$numero = 2;

if ($numero == 10):
    echo "É igual a 10\n";
elseif($numero < 10):
    echo "É menor que 10\n";
else:
    echo "É maior que 10\n";
endif;
```
Ao final da execução sempre colocar o endif para indicar o fim da estrutura.

A estrutura de condição "if" também pode ser representada através de um operador ternario em apenas uma linha de código. Iniciamos colocando entre parenteses a condicao a ser seguida, logo apos utilizamos "?" para indicar o if e o que 
sera impresso no terminal caso a condicao seja verdadeira, em seguida utilizamos o ":" para indicar o else e imprimir no terminal caso a condicao seja falsa:

```php
$media = 4;
echo ($media >= 7) ? "Aprovado!" : "Reprovado!";
```

### Estruturas de Repetição
A estrutura de repetição no PHP permite que um conjunto de instruções seja executado várias vezes com base em uma condição específica. Existem duas estruturas de repetição principais no PHP: "while" e "for".

### ***For***
A estrutura "for" é usada quando se sabe quantas vezes um conjunto de instruções precisa ser repetido.

A condição é definida na declaração do loop e, se for verdadeira, as instruções dentro do loop serão executadas.

O loop continuará até que a condição se torne falsa. **Por exemplo**:


A estrutura básica de um loop "for" em PHP é a seguinte:

```php
for (inicialização; condição; incremento/decremento) {
    // código a ser executado
}
```

Os três parâmetros dentro dos parênteses controlam o comportamento do loop:

1. Inicialização: Define o valor inicial da variável que será usada no loop.

1. Condição: Verifica se o loop deve continuar a ser executado a cada iteração. Se a condição for verdadeira, o loop continuará; caso contrário, o loop será interrompido.

1. Incremento/decremento: Atualiza o valor da variável a cada iteração. O valor pode ser incrementado (aumentado) ou decrementado (diminuído) em um valor específico.

O corpo do loop, delimitado por chaves, contém o código a ser executado em cada iteração do loop. O código pode incluir qualquer número de instruções, incluindo outras estruturas de controle de fluxo.


***Exemplo 1***


```php

<?php

echo "======= Ciclo For =======\n";


// Uma simples estrutura de repetição com for
for ($i = 1; $i <= 10; $i++) {
    echo "Contador ", $i, "\n";
}

?>

```

***Exemplo 2***

No caso de se desejar mostrar os números pares de 1 a 50, um ciclo "for" pode ser utilizado. Para isso, podemos começar definindo uma variável chamada $i como 1, que representará o valor que será testado em cada iteração do loop. 

Em seguida, podemos usar a condição $i <= 50 para garantir que o loop seja executado exatamente 50 vezes. Dentro do loop, podemos usar a instrução "if" para verificar se o valor atual de $i é par ou não. Se for par, podemos imprimir o valor na tela.

```php
<?php

echo "======= Ciclo For =======\n";


// o código abaixo demonstra como mostrar todos os números pares de 1 a 50
for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        echo "Número par: ", $i, "\n";
    }
} 

?>

```



### ***while***
A estrutura "while" é usada quando não se sabe quantas vezes um conjunto de instruções precisará ser repetido. 

A condição é testada antes de cada iteração e, se for verdadeira, as instruções dentro do loop serão executadas. 

O loop continuará até que a condição se torne falsa. Sua extrutura básica:

```php
while (condição) {
    // código a ser executado
}
```

***Exemplo 1***


```php
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

```

Além disso, existe outra variação do *While*: ***Do While***


O loop "do-while" em PHP é muito semelhante ao loop "while", mas com uma diferença importante: a condição é verificada no final de cada iteração em vez do início.

A estrutura básica do loop "do-while" é a seguinte:

```php

do {
    // código a ser executado
} while (condição);
```

O corpo do loop "do-while" contém o código a ser executado em cada iteração do loop, assim como no loop "while". No entanto, a condição é avaliada no final de cada iteração, depois que o código dentro do loop já foi executado pelo menos uma vez. Se a condição for verdadeira, o loop continuará executando; caso contrário, o loop será encerrado e a execução continuará após o loop.

Uma das principais vantagens do loop "do-while" é que ele garante que o código dentro do loop será executado pelo menos uma vez, independentemente da condição. Isso pode ser útil em situações em que é importante executar uma instrução pelo menos uma vez, mesmo que a condição seja falsa.

No entanto, assim como em qualquer loop, é importante ter cuidado para evitar loops infinitos, garantindo que a condição seja atualizada corretamente dentro do loop.

***Exemplo 2***

```php
 <?php  
    // Uma simples estrutura de repetição com Do while
    
    echo "======= Ciclo Do While =======\n";

    $hora = 5;  
    do {  
        echo "Você ainda está no ifal! \n";  
        $hora++;  
    } while ($hora < 10);  
?>  

```

### Modularização (Funções)

As funções são blocos de código que podem ser reutilizados em diferentes partes de um programa. Em PHP, as funções são definidas usando a palavra-chave "function" seguida do nome da função, uma lista de parâmetros (se houver) e o corpo da função.

``` php 

function nome_da_funcao($parametro1, $parametro2, ...) {
    // código a ser executado
    return $resultado;
}
```

O código PHP abaixo mostra um exemplo simples de uma função que recebe dois números como parâmetros e retorna a sua soma. É utilizado a função `readline` é usada para ler uma linha de entrada do usuário no terminal e retorná-la como uma string. Ela permite que o usuário digite uma entrada no console, que pode ser armazenada em uma variável e usada posteriormente no programa.

```php

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
```

***Exemplo: Função com argumentos por referência***


O código PHP abaixo mostra um exemplo de como passar argumentos por referência em uma função.



```php

<?php
echo "======= Exemplo de função =======\n";
echo "======= Passagem por referência =======\n";

//Criada a referência em $num_1
function referencia(&$num_1){
  $num_1 *= 5;

  //retorno o valor de $num_1 * 5
  return $num_1;
}

// Valor inicial de $num_2
$num_2 = 3;

//Execução da função
referencia($num_2);
echo $num_2;

?>

```

A passagem por referência é demonstrada na função ***referencia***. Quando um parâmetro é passado por referência, ele é indicado pelo símbolo "&" antes do nome do parâmetro na definição da função.

Isso significa que, em vez de passar uma cópia do valor da variável para a função, o endereço de memória da variável é passado. Isso permite que a função modifique diretamente o valor da variável original, mesmo que ela esteja fora do escopo da função.

No exemplo, a variável $num_1 é passada por referência para a função "referencia". Dentro da função, a variável é multiplicada por 5 e o valor resultante é retornado. Como a passagem é por referência, a variável original passada para a função é atualizada com o novo valor calculado dentro da função.

Quando a função é chamada passando a variável `$num_2` como argumento, o valor atual de ``{$num_2}`` é 3. No entanto, a função "referencia" atualiza o valor de ``$num_2`` para 15, já que a multiplicação por 5 é realizada dentro da função e a variável original é atualizada.

Após a execução da função, o valor atualizado de ``$num_2`` é exibido no console usando a função `echo`. Isso demonstra que a passagem por referência permitiu que a função "referencia" modificasse diretamente o valor da variável `$num_2`, mesmo que ela esteja fora do escopo da função.



