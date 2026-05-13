<?php

exibirMenu();
// $operacao = readline("Digite a operação desejada: ");
// $a = readline("Digite o primeiro número: ");
// $b = readline("Digite o segundo número: ");
// $resultado = calcular($operacao, $a, $b);
// echo "Resultado: " . $resultado . "\n";

function exibirMenu() {
    echo "Escolha a operação:<br>";
    echo "1. Somar<br>";
    echo "2. Subtrair<br>";
    echo "3. Multiplicar<br>";
    echo "4. Dividir<br>";
}

function calcular($operacao, $valor1, $valor2) {
    switch ($operacao) {
        case 'somar':
            return somar($valor1, $valor2);
        case 'subtrair':
            return subtrair($valor1, $valor2);
        case 'multiplicar':
            return multiplicar($valor1, $valor2);
        case 'dividir':
            return dividir($valor1, $valor2);
        case 'potenciacao':
            return potenciacao($valor1, $valor2);
        default:
            return "Operação inválida!";
    }
}

function somar($a, $b) {
    return $a + $b;
}   

function subtrair($a, $b) {
    return $a - $b;
}   

function multiplicar($a, $b) {
    return $a * $b;
}

function dividir($a, $b) {
    if ($b == 0) {
        return "Erro: Divisão por zero!";
    }
    return $a / $b;
}

function potenciacao($a, $b = 2) {
    return pow($a, $b);
}

echo potenciacao(5) . "<br>"; // Potenciação com valor padrão (5^2)
echo potenciacao(5, 3) . "<br>"; // Potenciação com valor personalizado (5^3)

// function teste($filtros) {
//     echo "Valor do filtro: " . $filtros->nome . "<br>";
//     echo "Valor do filtro: " . $filtros->sobrenome . "<br>";
// }

// $filtros = new stdClass();
// $filtros->nome = "João";
// $filtros->sobrenome = "Silva";
// teste($filtros);
