<?php

require_once __DIR__ . '/bootstrap.php';

$rotas = require __DIR__ . '/rotas.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$metodo = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

foreach ($rotas as $rota) {
    [$metodoRota, $caminhoRota, $acao] = $rota;

    $padrao = preg_replace('/\{([a-zA-Z]+)\}/', '([0-9]+)', $caminhoRota);
    $padrao = "#^{$padrao}$#";

    if ($metodo === $metodoRota && preg_match($padrao, $uri, $matches)) {
        array_shift($matches);

        return call_user_func_array($acao, $matches);
    }
}

http_response_code(404);
echo "Página não encontrada";
