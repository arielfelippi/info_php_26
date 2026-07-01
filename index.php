<?php

require_once "bootstrap.php";

$dados = $_REQUEST ?? [];

print_r($dados);

exit;

echo "<pre>";
try {
    $dados = [
            "nome" => "Ana",
            "sobrenome" => "Beltrano",
            "salario" => 26000,
            "cargo" => "Medica",
            "setor" => "Saude",
            "cracha" => "0035",
            "idPessoa" => 9,
        ];

    $idFuncionario = 6;//$funcionario->criar($dados);
    $funcionarios = $funcionario->listarPorId($idFuncionario);
    // print_r($funcionarios);
    echo $funcionarios;    

} catch (Exception $e) {
    echo $e->getMessage();
}
