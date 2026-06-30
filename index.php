<?php

require_once "bootstrap.php";

echo "<pre>";
try {
    $dados = [
            "nome" => "Rafaella",
            "sobrenome" => "Silva",
            "salario" => 15000,
            "cargo" => "Dentista",
            "setor" => "Saude",
            "cracha" => "0032",
            "idPessoa" => 5,
        ];

    $idFuncionario = $funcionarioModel->criar($dados);
    $funcionarios = $funcionarioModel->listarPorId($idFuncionario);
    print_r($funcionarios);
} catch (Exception $e) {
    echo $e->getMessage();
}
