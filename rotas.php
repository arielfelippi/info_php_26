<?php

$base_url = "/info_php_26";

return [
    ['GET', "$base_url/", function () {
        echo "<h1>Página inicial</h1>";
        echo "<a href='/funcionarios'>Funcionários</a>";
    }],

    ['GET', "$base_url/funcionarios", [$funcionarioController, 'listar']],

    ['GET', "$base_url/funcionarios/novo", [$funcionarioController, 'novo']],

    ['POST', "$base_url/funcionarios", [$funcionarioController, 'criar']],

    ['GET', "$base_url/funcionarios/{id}/editar", [$funcionarioController, 'editar']],

    ['POST', "$base_url/funcionarios/{id}", [$funcionarioController, 'atualizar']],

    ['POST', "$base_url/funcionarios/{id}/deletar", [$funcionarioController, 'deletar']],
];
