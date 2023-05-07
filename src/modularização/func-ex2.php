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