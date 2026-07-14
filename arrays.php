<?php

// Tipos Primitivos de dados: int, float, string, boolean, char.

// Tipos de dados estruturados: array || vetor, objetos || classes.

$numero = 10; // int
$numero = 10.0; // float || double (decimal)

// echo $numero; // 10 || 10.0

$listaValores = array(); // array vazio tamanho 0
$listaValores = []; // array vazio tamanho 0

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
    
    // $resultado[$i] = $soma; // $resultado[$i] = 5

    $resultado[] = $soma;
}

$tamanhoArray = count($resultado);

for ($i = 0; $i < $tamanhoArray; $i++) {
    echo "Indice(i): $i - Valor: " . $resultado[$i] . "<br>";
}

echo "<br>";

// ARRAY | VETOR Associativo: é um array onde os índices são strings,
// ou seja, chaves associativas.
$dadosPessoais = [
    "nome" => "João",
    "sobrenome" => "Silva",
    "idade" => 30,
    "email" => "joao.silva@example.com"
];

// echo "Nome: " . $dadosPessoais["nome"] . "<br>"; // João
// echo "E-mail: " . $dadosPessoais["email"] . "<br>"; // joao.silva@example.com

foreach ($dadosPessoais as $chave => $valor) {
    echo "Chave: $chave - Valor: $valor <br>";
}

echo "<br>";

foreach ($resultado as $idx => $valor) {
    echo "Índice: $idx - Valor: $valor <br>";
}

echo "<br>"; 

foreach ($resultado as $valor) {
    echo "Valor: $valor <br>";
}

/**
 * Com base no exercicio de:
 * Encontrar os 5 primeiros numeros Primos.
 * Exemplo: 2, 3, 5, 7, 11, 13, ...
 * 
 * Refaça o mesmo exercicio utilizando arrays para armazenar os numeros primos encontrados
 *  e exibir o resultado.
 *
 * Dica: Utilizar calculo dos pares, sendo que o unico primo par é o 2.
 *
 * Saída esperada: Os 5 primeiros Primos são: 3, 5, 7, 11, 13
 */
echo "<br>"; 
$limitePrimos = 5;
$contadorPrimos = 0;
$primos = [];

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
        $primos[] = $numero;
    }
}

echo "Os $limitePrimos primeiros Primos são: " . implode(", ", $primos) . "<br>";
// foreach ($primos as $valor) {
//      echo "Os $limitePrimos primeiros Primos são: $valor<br>";
// }


/**
 * Encontrar o maior numero em um array de numeros inteiros.
 * Exemplo: $numeros = [10, 5, 8, 20, 15];
 * Resultado: O maior numero é: 20
 */
echo "<br>"; 
$numeros = [10, 5, 8, 20, 15];
$maiorNumero = $numeros[0]; // 10

for ($i = 1; $i < count($numeros); $i++) {
    if ($numeros[$i] > $maiorNumero) {
        $maiorNumero = $numeros[$i];
    }
}

echo "O maior número é: $maiorNumero<br>";

/**
 * Criar um array associativo para armazenar as informações de um produto,
 * como nome, preço e quantidade em estoque.
 */
echo "<br>Produto: <br>"; 

$produtos = [
    "nome" => "Caneta",
    "preço" => "5.75",
    "quantidade" => 30,
];

$produtos["cor"] = "vermelha";
$produtos["cor"] = "azul";

foreach ($produtos as $idx => $informacao) {
     echo "$idx - $informacao<br>";
}

/*
$produtos = [
    [
        "nome" => "Lápis",
        "preço" => "5.75",
        "quantidade" => 30,
        "cor" => "vermelho",
    ],
    [
        "nome" => "Caneta",
        "preço" => "5.75",
        "quantidade" => 30,
        cor => "azul",
    ]
];

$produtos[0]["nome"] = "Lápis";
$produtos[1]["nome"] = "Caneta";
*/

/**
 * Adicionar um novo elemento a um array utilizando 
 * a função array_push() ou a sintaxe de colchetes [].
 * Exemplo: $frutas = ["maçã", "banana"];
 * Adicionar "laranja" ao array $frutas.
 */
echo "<br>"; 
$frutas = ["maçã", "banana"];
$frutas[] = "laranja";
array_push($frutas,"abacaxi");
// print_r($frutas);
echo "Frutas são: " . implode(", ", $frutas) . "<br>";

echo "<br>"; 
