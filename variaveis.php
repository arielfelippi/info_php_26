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

echo "<br><br>";
/**
 * Fazer a tabuada do 4, 5 mas com variavel, ou seja, o usuario informa um numero
 * e esse nmero será usado para a tabuada.
 * Resultado esperado:
 *  4 x 1 = 4
 *  4 x 2 = 8
 *  4 x 3 = 12
 *  ...
 *  4 x 10 = 40
 */
$numero = 4;

echo "$numero x 1 = " . $numero * 1 . "<br>";
echo "$numero x 2 = " . $numero * 2 . "<br>";
echo "$numero x 3 = " . $numero * 3 . "<br>";
echo "$numero x 4 = " . $numero * 4 . "<br>";
echo "$numero x 5 = " . $numero * 5 . "<br>";
echo "$numero x 6 = " . $numero * 6 . "<br>";
echo "$numero x 7 = " . $numero * 7 . "<br>";
echo "$numero x 8 = " . $numero * 8 . "<br>";
echo "$numero x 9 = " . $numero * 9 . "<br>";
echo "$numero x 10 = " . $numero * 10 . "<br>";

echo "<br><br>";
$numero = 5;

echo "$numero x 1 = " . $numero * 1 . "<br>";
echo "$numero x 2 = " . $numero * 2 . "<br>";
echo "$numero x 3 = " . $numero * 3 . "<br>";
echo "$numero x 4 = " . $numero * 4 . "<br>";
echo "$numero x 5 = " . $numero * 5 . "<br>";
echo "$numero x 6 = " . $numero * 6 . "<br>";
echo "$numero x 7 = " . $numero * 7 . "<br>";
echo "$numero x 8 = " . $numero * 8 . "<br>";
echo "$numero x 9 = " . $numero * 9 . "<br>";
echo "$numero x 10 = " . $numero * 10 . "<br>";

/**
 * Calcule area de um quadrado
 */
$lado1 = 10;
$lado2 = 10;
$area = $lado1 * $lado2;
$area = $lado1 ** 2; // potenciacao
$area = pow($lado1, 2); // potenciacao

echo "A area do quadrado é: $area <br>";


/**
 * Calcule area de um triangulo equilatero
 */
$base = 10;
$altua = 10;
$area = ($base * $altua) /2;
echo "A area do triangulo equilatero é: $area <br>";

echo "<br><br>";
$numero = 6;

if ($numero == 5) { // 5 == 5 true
    echo "O numero é 5 <br>";
} else {
    echo "O numero é desconhecido <br>";
}

switch ($numero) {
    case 5 :  echo "O numero é 5 <br>";
     break;
    case 7 : echo "O numero é 7 <br>";
     break;
    case 9 : echo "O numero é 9 <br>";
     break;
    default:  echo "O numero é desconhecido <br>";
     break;
}



/**
 * Ler um numero informado pelo usuario e exibir se o numero e impar ou par.
 * Dica: operador modulo % e IF ELSE
 */
$numero = 6;
$divisor = 2;

$resultado = $numero / $divisor; // 3 quociente
$resto = $numero % $divisor; // 1 resto

$ehPar =  $resto == 0; // true || false

if ($ehPar == true || $ehPar) {
    echo "O numero $numero é par. <br>";
} else {
     echo "O numero $numero é impar. <br>";
}

/**
 * Nota do aluno
 */
$nota1 = 3;
$nota2 = 3;
$nota3 = 4;

$media = ($nota1 + $nota2 + $nota3) / 3;

$mediaArredondada = round($media, 2);

if ($mediaArredondada >= 7) {
    echo "O Aluno foi aprovado com a média $mediaArredondada <br>";
} else {
     echo "O Aluno foi reprovado com a média $mediaArredondada <br>";
}
