<?php

$corCasa = "vermelho"; //declaração de variável a ser comparada com o switch

switch ($corCasa):
    case "vermelho":
      echo "Sua casa é vermelha"; // código a ser executado se $corCasa for igual a "vermelho"
      break;
    case "amarelo":
      echo "Sua casa é amarela"; // código a ser executado se $corCasa for igual a "amarelo"
      break;
    case "azul":
      echo "Sua casa é azul"; // código a ser executado se $corCasa for igual a "azul"
      break;
    // e assim por diante
    default:
      echo "Sua casa não é vermelha, azul ou amarela."; // código a ser executado se $expressao não corresponder a nenhum valor

endswitch; //finaliza o bloco de código do switch, podendo prosseguir com o código.