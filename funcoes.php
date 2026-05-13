<?php

function exibirMenu() {
    echo "Escolha a operação:\n";
    echo "1. Somar\n";
    echo "2. Subtrair\n";
    echo "3. Multiplicar\n";
    echo "4. Dividir\n";
}

function calcular($operacao, $a, $b) {
    switch ($operacao) {
        case 'somar':
            return somar($a, $b);
        case 'subtrair':
            return subtrair($a, $b);
        case 'multiplicar':
            return multiplicar($a, $b);
        case 'dividir':
            return dividir($a, $b);
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


