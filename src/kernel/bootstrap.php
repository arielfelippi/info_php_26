<?php

session_start();

define("ROOT_PATH", dirname(__DIR__, 2));
define("APP_PATH", ROOT_PATH . "/src");

require_once APP_PATH . "/config/app.php";
require_once APP_PATH . "/kernel/helpers.php";
require_once APP_PATH . "/kernel/autoload.php";
require_once APP_PATH . "/config/conexao.php";

$banco = new BancoDeDados($conexao);

$funcionarioModel = new FuncionarioModel($banco);
$funcionarioController = new FuncionarioController($funcionarioModel);
