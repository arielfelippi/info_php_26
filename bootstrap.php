<?php

session_start();

require_once __DIR__ . "/conexao.php";
require_once __DIR__ . "/BancoDeDados.php";
require_once __DIR__ . "/BaseModel.php";
require_once __DIR__ . "/FuncionarioModel.php";
require_once __DIR__ . "/Funcionario.php";
require_once __DIR__ . "/FuncionarioController.php";

$banco = new BancoDeDados($conexao);
$funcionarioModel = new FuncionarioModel($banco);
$funcionarioController = new FuncionarioController($funcionarioModel);
