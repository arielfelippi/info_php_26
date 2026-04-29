<?php

// Tipos Primitivos de dados: int, float, string, boolean, char.

// Tipos de dados estruturados: array || vetor, objetos

$numero = 10; // int
$numero = 10.0; // float || double (decimal)

$listaValores = array(); // array vazio
$listaValores = []; // array vazio

$listaValores = [10, 20, 3, 50];
//                0,  1, 2,  3

$tam = count($listaValores); // 4

print_r($listaValores);

for ($i = 0; $i < $tam; $i++) {
    echo $listaValores[$i] . "<br>";
}
