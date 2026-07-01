<?php

require_once "conexao.php";
require_once "BancoDeDados.php";
require_once "FuncionarioModel.php";
require_once "Funcionario.php";

$banco = new BancoDeDados($conexao);
$funcionarioModel = new FuncionarioModel($banco);   
$funcionario = new Funcionario($funcionarioModel);
