<?php

/*
|--------------------------------------------------------------------------
| Conexão com o banco de dados
|--------------------------------------------------------------------------
|
| Ajuste usuário, senha e banco conforme o ambiente da aula.
|
*/
$host = "localhost";
$usuario = "aluno";
$senha = "1234";
$bancoDados = "info_php_26";

$conexao = new mysqli($host, $usuario, $senha, $bancoDados);

if ($conexao->connect_error) {
    die("Erro ao conectar no banco de dados: " . $conexao->connect_error);
}

$conexao->set_charset("utf8mb4");
