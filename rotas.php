<?php

return [
    ['GET', '/', function () {
        echo "Página inicial";
    }],

    ['GET', '/usuarios', 'listarUsuarios'],

    ['GET', '/usuarios/novo', function () {
        require __DIR__ . '/form-usuario.php';
    }],

    ['POST', '/usuarios', 'criarUsuario'],

    ['GET', '/usuarios/{id}/editar', 'editarUsuario'],

    ['POST', '/usuarios/{id}', 'atualizarUsuario'],

    ['POST', '/usuarios/{id}/deletar', 'deletarUsuario'],
];
