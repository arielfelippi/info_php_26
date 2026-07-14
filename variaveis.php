<?php

// // Mock/Chumbar/fixar = ler dados usuario
// $nome = "Ariel";

// /** Ler os dados de usuario, sendo eles:
//  * nome
//  * idade
//  * sexo
//  * nome pai
//  * nome mae
//  * E escrever a frase: O Usuario de NOME, IDADE, SEXO é filho(a) de:
//  * Nome pai e nome mae
// */
// $nome = "Ariel";
// $idade = "30";
// $sexo = "Masculino";
// $nomeMae = "Fulana"; // camel case
// $nome_mae = "Fulana"; // sanke case
// $nomemae= "";
// $nomePai = "Beltrano";

// // echo "O Usuario de $nome, $idade, $sexo é filho(a) de: $nomePai e $nomeMae <br>";

// /**
//  * Somar dois valores e exibir o resultado dos mesmos com a frase:
//  * A soma dos valores é: SOMA
//  */
// $valor = 10;
// $valor2 = 20;
// $resultado = $valor + $valor2;
// echo "A soma dos valores $valor + $valor2 é: $resultado <br>";

// /**
//  * Subtrair dois valores e exibir o resultado dos mesmos com a frase:
//  * A subtração dos valores é: SUBTRACAO
//  */
// $valor = 10;
// $valor2 = 20;
// $resultado = $valor - $valor2;
// echo "A subtração dos valores $valor - $valor2 é: $resultado <br>";

// /**
//  * Multiplicar dois valores e exibir o resultado dos mesmos com a frase:
//  * A multiplicacao dos valores é: MULTIPLICACAO
//  */
// $valor = 10;
// $valor2 = 10;
// $resultado = $valor * $valor2;
// echo "A multiplicacao dos valores $valor * $valor2 é: $resultado <br>";

// /**
//  * Dividir dois valores e exibir o resultado dos mesmos com a frase:
//  * A divisao dos valores é: DIVISAO
//  */
// $valor = 10;
// $valor2 = 10;
// $resultado = $valor / $valor2;
// echo "A divisao dos valores $valor / $valor2 é: $resultado <br>";

// echo "<br><br>";
// /**
//  * Fazer a tabuada do 4, 5 mas com variavel, ou seja, o usuario informa um numero
//  * e esse nmero será usado para a tabuada.
//  * Resultado esperado:
//  *  4 x 1 = 4
//  *  4 x 2 = 8
//  *  4 x 3 = 12
//  *  ...
//  *  4 x 10 = 40
//  */
// $numero = 4;

// echo "$numero x 1 = " . $numero * 1 . "<br>";
// echo "$numero x 2 = " . $numero * 2 . "<br>";
// echo "$numero x 3 = " . $numero * 3 . "<br>";
// echo "$numero x 4 = " . $numero * 4 . "<br>";
// echo "$numero x 5 = " . $numero * 5 . "<br>";
// echo "$numero x 6 = " . $numero * 6 . "<br>";
// echo "$numero x 7 = " . $numero * 7 . "<br>";
// echo "$numero x 8 = " . $numero * 8 . "<br>";
// echo "$numero x 9 = " . $numero * 9 . "<br>";
// echo "$numero x 10 = " . $numero * 10 . "<br>";

// echo "<br><br>";
// $numero = 5;

// echo "$numero x 1 = " . $numero * 1 . "<br>";
// echo "$numero x 2 = " . $numero * 2 . "<br>";
// echo "$numero x 3 = " . $numero * 3 . "<br>";
// echo "$numero x 4 = " . $numero * 4 . "<br>";
// echo "$numero x 5 = " . $numero * 5 . "<br>";
// echo "$numero x 6 = " . $numero * 6 . "<br>";
// echo "$numero x 7 = " . $numero * 7 . "<br>";
// echo "$numero x 8 = " . $numero * 8 . "<br>";
// echo "$numero x 9 = " . $numero * 9 . "<br>";
// echo "$numero x 10 = " . $numero * 10 . "<br>";

// /**
//  * Calcule area de um quadrado
//  */
// $lado1 = 10;
// $lado2 = 10;
// $area = $lado1 * $lado2;
// $area = $lado1 ** 2; // potenciacao
// $area = pow($lado1, 2); // potenciacao

// echo "A area do quadrado é: $area <br>";


// /**
//  * Calcule area de um triangulo equilatero
//  */
// $base = 10;
// $altua = 10;
// $area = ($base * $altua) /2;
// echo "A area do triangulo equilatero é: $area <br>";

// echo "<br><br>";
// $numero = 6;

// if ($numero == 5) { // 5 == 5 true
//     echo "O numero é 5 <br>";
// } else {
//     echo "O numero é desconhecido <br>";
// }

// switch ($numero) {
//     case 5 :  echo "O numero é 5 <br>";
//      break;
//     case 7 : echo "O numero é 7 <br>";
//      break;
//     case 9 : echo "O numero é 9 <br>";
//      break;
//     default:  echo "O numero é desconhecido <br>";
//      break;
// }



// /**
//  * Ler um numero informado pelo usuario e exibir se o numero e impar ou par.
//  * Dica: operador modulo % e IF ELSE
//  */
// $numero = 6;
// $divisor = 2;

// $resultado = $numero / $divisor; // 3 quociente
// $resto = $numero % $divisor; // 1 resto

// $ehPar =  $resto == 0; // true || false

// if ($ehPar == true || $ehPar) {
//     echo "O numero $numero é par. <br>";
// } else {
//      echo "O numero $numero é impar. <br>";
// }

// /**
//  * Nota do aluno média aritmetica
//  */
// $nota1 = 3;
// $nota2 = 3;
// $nota3 = 4;

// $media = ($nota1 + $nota2 + $nota3) / 3;

// $mediaArredondada = round($media, 2);

// if ($mediaArredondada >= 7) {
//     echo "O Aluno foi aprovado com a média(aritmetica) $mediaArredondada <br>";
// } else {
//      echo "O Aluno foi reprovado com a média(aritmetica) $mediaArredondada <br>";
// }

// /**
//  *   Nota do aluno média harmonica
//  */

// $nota1 = 15;
// $nota2 = 10;
// $nota3 = 6;

// $mediaHarmonica= 3 / ( ( 1/ $nota1) + ( 1/ $nota2) +  ( 1/ $nota3));

// $mediaArredondada = round($mediaHarmonica, 2);

// if ($mediaArredondada >= 7) {
//     echo "O Aluno foi aprovado com a média(harmonica) $mediaArredondada <br>";
// } else {
//      echo "O Aluno foi reprovado com a média(harmonica) $mediaArredondada <br>";
// }

// /**
//  *   Nota do aluno média ponderada
//  */

// $nota1 = 1100;
// $nota2 = 2000;
// $nota3 = 5500;
// $nota4 = 12500;

// $peso1 = 5;
// $peso2 = 16;
// $peso3 = 3;
// $peso4 = 1;

// $numerador = ($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3) + ($nota4 * $peso4);
// $denominador = $peso1 + $peso2 + $peso3 + $peso4;

// $mediaPonderada = $numerador / $denominador;

// $mediaArredondada = round($mediaPonderada, 2);

// if ($mediaArredondada >= 7) {
//     echo "O Aluno foi aprovado com a média(ponderada) $mediaArredondada <br>";
// } else {
//      echo "O Aluno foi reprovado com a média(ponderada) $mediaArredondada <br>";
// }

// echo "<br>";

// // LOOPS
// $contador = 0;
// $contador = $contador + 1; // 1
// $contador += 1; // 1
// $contador++;

// $numero = 4;

// for($contador = 0; $contador <= 10; $contador++) {
//     echo "$numero x $contador = " . $numero * $contador . "<br>";
// }

// // for ($numero = 1; $numero <= 10; $numero++) {
// //     for($contador = 0; $contador <= 10; $contador++) {
// //         echo "$numero x $contador = " . $numero * $contador . "<br>";
// //     }
// // }

// echo "<br>while<br>";

// $numero = 4;
// $contador = 0;

// while($contador <= 10) {
//     echo "$numero x $contador = " . $numero * $contador . "<br>";
//     $contador++;
// }

// echo "<br>while completo<br>";

// $numero = 1;
// $contador = 0;

// while($contador <= 10) {
//     echo "$numero x $contador = " . $numero * $contador . "<br>";
//     $contador++;

//     if ($contador == 11) {
//         $numero++;
//         $contador = 0;
//         echo "<br>";
//     }

//     if ( $numero == 11) {
//         break;
//     }
// }


// echo "<br>do while<br>";

// $numero = 4;
// $contador = 11;

// do {
//     echo "$numero x $contador = " . $numero * $contador . "<br>";
//     $contador++;

// } while($contador <= 10);

// // Listar os 10 primeiros numeros pares com LOOP
// // 2, 4, 6, 8, 10, 12, 14, 16, 18, 20
// echo "<br>10 primeiros numeros pares<br>";

// $contador = 0;

// for($numero = 1; $contador < 10; $numero++) {
//     $divisor = 2;

//     $resultado = $numero / $divisor; // 3 quociente
//     $resto = $numero % $divisor; // 1 resto

//     $ehPar =  $resto == 0; // true || false

//     if ($ehPar) {
//         echo "O numero $numero é par. <br>";
//         $contador++;
//     }
// }

// EXERCICIOS de REVISAO AULA 14/04/2026.

/**
 * Calcular IMC(Indice de Massa Corporal) de uma pessoa e
 * exibir os valores utilizados no calculo assim como o seu IMC.
 *
 * Saída esperada: O IMC é: 123
 */

$altura = 1.88;
$peso = 80;
$imc = $peso /($altura * $altura);
echo "<br>O IMC é: $imc<br>";

/**
 * Calcular quantos segundos tem em 2 horas e 30 minutos e exibir o valor.
 *
 * Dica: converter tudo para uma mesma medida (segundos) para facilitar o calculo.
 *
 * Saída esperada: O Total em segundos é: 9000.
 */

$horas = 2;
$minutos = 30;
$horasParaMinutos = $horas * 60;
$horasParaSegundos = $horasParaMinutos * 60;

$minutosParaSegundos = $minutos * 60;
$segundos = $horasParaSegundos + $minutosParaSegundos;
echo "O Total em segundos é: $segundos<br>";


/**
 * Simular o funcionamento de uma calculadora com as duas estruturas lógicas:
 * Switch Case e IF ELSE IF ELSE. Não é necessário o ZERAR, somente o calculo.
 * Operadores: + - * /
 *
 * Dica: utilizar 4 variáveis, uma delas vai ser $operador a outra $resultado.
 */
$valor = 10;
$operador = "/";
$valor2 = 10;
$resultado = 0;

if ($operador == "+") {
    $resultado = $valor + $valor2;
} else if ($operador == "-") {
    $resultado = $valor - $valor2;
} else if ($operador == "*") {
    $resultado = $valor * $valor2;
} else if ($operador == "/") {
    $resultado = $valor / $valor2;
} else {
    echo "O operador: $operador informado é inváldo. Informe um operador válido + - * /";
    exit;
}

echo "O resultado de $valor $operador $valor2 é: $resultado<br>";

$valor = 10;
$operador = "*";
$valor2 = 10;
$resultado = 0;

// parte 2:
switch($operador) {
    case "+" : $resultado = $valor + $valor2;
        break;
    case "-" : $resultado = $valor - $valor2;
        break;
    case "*" : $resultado = $valor * $valor2;
        break;
    case "/" : $resultado = $valor / $valor2;
        break;
    default: echo "O operador: $operador informado é inváldo. Informe um operador válido + - * /";
        exit;
}

echo "O resultado de $valor $operador $valor2 é: $resultado<br>";

/**
 * Exibir os numeros em ordem DECRESCENTE(Maior para Menor - DESC) de 10 - 0.
 *
 * Dica: utilizar laçoes de repetição(loops) FOR e WHILE
 *
 * Saída esperada: 10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0.
 */
echo "FOR:<br>";
for($i = 10; $i >= 0; $i--) {
    echo "$i, ";
}

echo "<br>WHILE:<br>";

$i = 10;
while($i >= 0) {
    echo "$i, ";
    $i--;
}


/**
 * Calcular o fatorial de um numero qualquer.
 * Ex.: calcular o fatorial de 5 (5!).
 *
 * Dica: 5 x 4 x 3 x 2 x 1. utilizar laçoes de repetição(loops) FOR e WHILE
 *
 * Saída esperada: o fatorial de 5 é: 120.
 */
$numero = 5;
$fatorial = $numero;

for ($i = $numero - 1; $i >= 1; $i --) {
    $fatorial *= $i;
}

echo "<br>O fatorial de $numero é: $fatorial<br>";

// OU 

$fatorial = 1;
for ($i = $numero; $i >= 1; $i --) {
    $fatorial *= $i;
}

echo "O fatorial de $numero é: $fatorial<br>";

echo "WHILE:";

$numero = 5;
$fatorial = 1;

$i = $numero;

while($i >= 1) {
    $fatorial *= $i;
    $i --;
}

echo "<br>O fatorial de $numero é: $fatorial<br>";

/**
 * Com base no exercicio de:
 * Listar os 10 primeiros numeros pares com laçoes de repetição(loops) utilizando FOR e WHILE.
 *
 * Encontrar os 5 primeiros numeros Primos.
 *
 * Dica: Utilizar calculo dos pares, sendo que o unico primo par é o 2.
 *
 * Saída esperada: Os 5 primeiros Primos são: 3, 5, 7, 11, 13
 */
$limitePrimos = 5;
$contadorPrimos = 0;
$primos = "";

for($numero = 3; $contadorPrimos < $limitePrimos; $numero++) {

    $ehPrimo = true;
    $antecessor = $numero - 1; // 6

    for($divisor = 2; $divisor <= $antecessor; $divisor++) {
    
        $resto = $numero % $divisor;
        $naoEhPrimo = $resto == 0;

        if ($naoEhPrimo) {
           $ehPrimo = false;
           break;
        }

    }

    if ($ehPrimo) {
        $contadorPrimos++;
        $primos .= "$numero, ";
    }
}

 echo "Os $limitePrimos primeiros Primos são: $primos<br>";

 /**
 * Calcular o tempo de duração de um jogo de futebol.
 * Considerando que um jogo pode começar em um dia e terminar no outro.
 * Ex.: 23:30 - 01:00
 * 
 * Fase 1: jogo vai ter exatos 90 minutos.
 * Fase 2: jogo pode ter acrescimos.
 * 
 * Dica: converter tudo para uma mesma medida (segundos) para facilitar o calculo.
 *
 * Saída esperada: O horário do término da partida é: 16:00:00.
 */
$acrescimos = 6;
$tempoDeJogo = 90;

// Fase 1:
$horaInicio = "14:30:00"; // 16:00:00

// Fase 2:
// $horaInicio = "23:30:00"; // 01:00:00

$tempoArray = explode(":", $horaInicio);
$horas = $tempoArray[0]; // 14
$minutos = $tempoArray[1]; // 30
$segundos = $tempoArray[2]; // 00

$horasEmMinutos = $horas * 60;
$minutos += $horasEmMinutos + $tempoDeJogo + $acrescimos;

$horas = (int) ($minutos / 60); // truncate e cast

if ($horas >= 24) {
    $horas -= 24;
}

$minutos = $minutos % 60;

$horaFinal = str_pad($horas, 2, "0", STR_PAD_LEFT);
$minutosFinal = str_pad($minutos, 2, "0", STR_PAD_LEFT);
$horarioFinal = "$horaFinal:$minutosFinal:$segundos";

echo "O horário do término da partida é: $horarioFinal<br>";
