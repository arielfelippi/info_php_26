<?php

// Executar no terminal: php ./calculadoraNoTerminal.php || php calculadoraNoTerminal.php
executar();

function executar() {
    do {
        echo "Bem-vindo à Calculadora no Terminal!\n";
        echo "-----------------------------\n";

        exibirMenu();
        $operacao = readline("Digite a operação desejada: ");
        $a = readline("Digite o primeiro número: ");
        $b = readline("Digite o segundo número: ");

        $operacao = ajustarOperacao($operacao);

        $resultado = calcular($operacao, $a, $b);
        echo "Resultado: " . $resultado . "\n";

        $resposta = desejaContinuar();

        if ($resposta == 'n' || $resposta == 'N') {
            break;
        } 

        echo "\n";

    } while (true);
}

function exibirMenu() {
    echo "Escolha a operação:\n";
    echo "1. Somar\n";
    echo "2. Subtrair\n";
    echo "3. Multiplicar\n";
    echo "4. Dividir\n";
    echo "5. Potenciação\n";
}

function desejaContinuar() {
    echo "\nDeseja realizar outra operação? (s/n): ";
    $resposta = readline();

    if ($resposta != 'n' && $resposta != 's' && $resposta != 'N' && $resposta != 'S') {
        echo "Resposta inválida! Por favor, digite 's' para sim ou 'n' para não.\n";
        return desejaContinuar();
    } 

    return $resposta;
}

function ajustarOperacao($operacao) {
    if ($operacao == '1') {
        return 'somar';
    } elseif ($operacao == '2') {
        return 'subtrair';
    } elseif ($operacao == '3') {
        return 'multiplicar';
    } elseif ($operacao == '4') {
        return 'dividir';
    } elseif ($operacao == '5') {
        return 'potenciacao';
    } else {
        return strtolower($operacao); // Retorna a operação digitada pelo usuário, convertida para minúscula
    }
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
