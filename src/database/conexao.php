<?php

$conexao = mysqli_connect("localhost", "aluno", "1234", "info_php_26");
// $conexao = mysqli_connect("172.52.89.2", "aluno", "1234", "info_php_26");
// $conexao = mysqli_connect("htttp://localweb.com/mysql", "aluno", "1234", "info_php_26");

// só entra aqui se deu erro ao conectar com o banco.
// if ($conexao === false) { ... }
// PHP_EOL == \n || <br/>
if (!$conexao) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
