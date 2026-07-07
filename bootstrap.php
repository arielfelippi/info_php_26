<?php

session_start();

require_once "conexao.php";
require_once "BancoDeDados.php";
require_once "BaseModel.php";
require_once "FuncionarioModel.php";
require_once "Funcionario.php";
require_once "FuncionarioController.php";

$banco = new BancoDeDados($conexao);
$funcionarioModel = new FuncionarioModel($banco);
$funcionarioController = new FuncionarioController($funcionarioModel);
