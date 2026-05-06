<?php

// Tipos Primitivos de dados: int, float, string, boolean, char.

// Tipos de dados estruturados: array || vetor, objetos || classes.

$numero = 10; // int
$numero = 10.0; // float || double (decimal)

// echo $numero; // 10 || 10.0

$listaValores = array(); // array vazio
$listaValores = []; // array vazio

$listaValores = array(10, 20, 3, 50);
$listaValores = [10, 20, 3, 50, 85]; // array com 6 elementos
//                0,  1, 2,  3,  4

// echo $listaValores[4]; // 85

$tamanhoArray = count($listaValores); // 5

// print_r($listaValores);

for ($i = 0; $i < $tamanhoArray; $i++) {
    // echo "Indice(i): $i - Valor: " . $listaValores[$i] . "<br>";
}

/**
 * Somar dois vetores e exibir o resultado.
 * Exemplo:
 * $vetor1 = [1, 2, 3];
 *            0, 1, 2
 * $vetor2 = [4, 5, 6];
 * Resultado: [5, 7, 9] 
 */

$vetor1 = [1, 2, 3];
$vetor2 = [4, 5, 6];
$resultado = [];

for ($i = 0; $i < count($vetor1); $i++) {
    $valor1 = $vetor1[$i]; // 1
    $valor2 = $vetor2[$i]; // 4

    $soma = $valor1 + $valor2; // 1 + 4 = 5
    
    $resultado[$i] = $soma; // $resultado[$i] = 5

    // $resultado[] = $vetor1[$i] + $vetor2[$i];
}

$tamanhoArray = count($resultado);

for ($i = 0; $i < $tamanhoArray; $i++) {
    echo "Indice(i): $i - Valor: " . $resultado[$i] . "<br>";
}
