<?php

return [
    ['GET', '/', function () {
        echo "<h1>Página inicial</h1>";
        echo "<a href='/funcionarios'>Funcionários</a>";
    }],

    ['GET', '/funcionarios', 'listarFuncionarios'],

    ['GET', '/funcionarios/novo', 'exibirFormularioFuncionario'],

    ['POST', '/funcionarios', 'criarFuncionario'],

    ['GET', '/funcionarios/{id}/editar', 'editarFuncionario'],

    ['POST', '/funcionarios/{id}', 'atualizarFuncionario'],

    ['POST', '/funcionarios/{id}/deletar', 'deletarFuncionario'],
];
