<?php

session_start();

require_once "./src/database/conexao.php";
require_once "./src/database/BancoDeDados.php";
require_once "./src/models/BaseModel.php";
require_once "./src/models/FuncionarioModel.php";
require_once "./src/kernel/FuncionarioEntity.php";
require_once "./src/controllers/FuncionarioController.php";

$banco = new BancoDeDados($conexao);
$funcionarioModel = new FuncionarioModel($banco);
$funcionarioController = new FuncionarioController($funcionarioModel);
