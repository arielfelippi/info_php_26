<?php

// Mock/Chumbar/fixar = ler dados usuario
$nome = "Ariel";

/** Ler os dados de usuario, sendo eles:
 * nome
 * idade
 * sexo
 * nome pai
 * nome mae
 * E escrever a frase: O Usuario de NOME, IDADE, SEXO é filho(a) de:
 * Nome pai e nome mae
*/
$nome = "Ariel";
$idade = "30";
$sexo = "Masculino";
$nomeMae = "Fulana"; // camel case
$nome_mae = "Fulana"; // sanke case
$nomemae= "";
$nomePai = "Beltrano";

// echo "O Usuario de $nome, $idade, $sexo é filho(a) de: $nomePai e $nomeMae <br>";

/**
 * Somar dois valores e exibir o resultado dos mesmos com a frase:
 * A soma dos valores é: SOMA
 */
$valor = 10;
$valor2 = 10;
$resultado = $valor + $valor2;
echo "A soma dos valores $valor + $valor2 é: $resultado <br>";

/**
 * Subtrair dois valores e exibir o resultado dos mesmos com a frase:
 * A subtração dos valores é: SUBTRACAO
 */
$valor = 10;
$valor2 = 10;
$resultado = $valor - $valor2;
echo "A subtração dos valores $valor - $valor2 é: $resultado <br>";

/**
 * Multiplicar dois valores e exibir o resultado dos mesmos com a frase:
 * A multiplicacao dos valores é: MULTIPLICACAO
 */
$valor = 10;
$valor2 = 10;
$resultado = $valor * $valor2;
echo "A multiplicacao dos valores $valor * $valor2 é: $resultado <br>";

/**
 * Dividir dois valores e exibir o resultado dos mesmos com a frase:
 * A divisao dos valores é: DIVISAO
 */
$valor = 10;
$valor2 = 10;
$resultado = $valor / $valor2;
echo "A divisao dos valores $valor / $valor2 é: $resultado <br>";