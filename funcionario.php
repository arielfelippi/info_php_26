<?php

/**
 * Exercício: Criar um sistema que calcule o aumento de salário de um funcionário e os desconto do INSS e do IRPF,
 * considerando as seguintes regras:
 * - O aumento de salário é de 10% para salários até R$ 1.999.
 * - O aumento de salário é de 3% para salários acima de R$ 2.000.
 * - O desconto do INSS é de 11% para salários acima de R$ 3.000.
 * - O desconto do IRPF é de 0% para salários até R$ 4.500.
 * - O desconto do IRPF é de 22.5% para salários acima de R$ 4.500.
 * Utilizar como exemplo o sistema da calculadora no terminal,
 * onde o usuário irá digitar o salário do funcionário e o sistema irá exibir o salário atualizado com os descontos aplicados.
 * Dica: Utilizar a função number_format() para formatar o salário com duas casas decimais e o símbolo de moeda.
 */

// Executar no terminal:   php ./funcionario.php || php funcionario.php
executar();

function executar() {
    do {
        echo "Bem-vindo à Calculadora de Salários!\n";
        echo "-----------------------------\n";

        $salario = lerSalario();  
        exibirMenu();
        $opcao = lerOpcaoMenu();
        $opcaoEscolhida = executarOpcao($opcao, $salario);

        if ($opcaoEscolhida == 0) {
            echo "**Operação inválida!**\n";
            echo "\n";
            continue;
        }

        $resposta = desejaContinuar();

        if ($resposta == 'n' || $resposta == 'N') {
            break;
        } 

        echo "\n";

    } while (true);
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

function exibirMenu() {
    echo "\nEscolha a opção:\n";
    echo "1. Calcular Salário\n";
    echo "2. Exibir Aumento\n";
    echo "3. Exibir Descontos\n";
    echo "4. Exibir Salário Anterior e o Atualizado(novo)\n";
    echo "5. Exibir Holerite(contra-cheque)\n";
}

function lerOpcaoMenu() {
    echo "\nDigite o número da opção desejada: ";
    $opcao = readline();

    return $opcao;
}

function executarOpcao($opcao, $salario) {
    if ($opcao == '1') {
        calcularSalario($salario);
        return 1;
    } elseif ($opcao == '2') {
        exibirAumento($salario);
        return 2;
    } elseif ($opcao == '3') {
        exibirDescontos($salario);
        return 3;
    } elseif ($opcao == '4') {
        exibirSalarios($salario);
        return 4;
    } elseif ($opcao == '5') {
        exibirHolerite($salario);
        return 5;
    } else {
         return 0;
    }
}

function lerSalario() {
    echo "\nDigite o salário do funcionário: ";
    $salario = readline();

    return $salario;
}

function formatarSalario($salario) {
    return number_format($salario, 2, ',', '.');
}

function calcularAumento($salario) {
    if ($salario <= 1999) {
        return $salario * 0.10;
    } else {
        return $salario * 0.03;
    }
}

function calcularSalario($salario) {
    $aumento = calcularAumento($salario);
    $salarioAtualizado = $salario + $aumento;
    
    echo "\nSalário atualizado com aumento: R$ " . formatarSalario($salarioAtualizado) . "\n";
}

function exibirAumento($salario) {
    // logica aqui
}

function exibirDescontos($salario) {
    // logica aqui
}

function exibirSalarios($salario) {
    // logica aqui
}

function exibirHolerite($salario) {
    // logica aqui
}
