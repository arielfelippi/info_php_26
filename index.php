<?php

/*
|--------------------------------------------------------------------------
| Arquivo principal da aplicação
|--------------------------------------------------------------------------
|
| O index.php é o ponto de entrada do sistema.
| Todas as requisições passam por este arquivo.
|
| Ele é responsável por:
| 1. Carregar as configurações iniciais da aplicação;
| 2. Carregar o arquivo de rotas;
| 3. Descobrir qual URL foi acessada;
| 4. Descobrir qual método HTTP foi usado;
| 5. Procurar uma rota compatível;
| 6. Executar a ação da rota encontrada.
|
*/

// Carrega o arquivo bootstrap.php.
// Esse arquivo pode iniciar sessão, carregar funções,
// configurar conexão com banco, importar arquivos etc.
require_once __DIR__ . '/bootstrap.php';

// Carrega o arquivo de rotas.
// O arquivo rotas.php retorna um array com todas as rotas da aplicação.
$rotas = require __DIR__ . '/rotas.php';

/*
|--------------------------------------------------------------------------
| Captura da URL acessada
|--------------------------------------------------------------------------
|
| $_SERVER['REQUEST_URI'] pega a URL completa acessada pelo usuário.
|
| Exemplo:
| /usuarios/novo?teste=123
|
| parse_url(..., PHP_URL_PATH) remove os parâmetros da URL
| e deixa somente o caminho.
|
| Resultado:
| /usuarios/novo
|
*/
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

/*
|--------------------------------------------------------------------------
| Captura do método HTTP
|--------------------------------------------------------------------------
|
| $_SERVER['REQUEST_METHOD'] informa qual método foi usado na requisição.
|
| Exemplos:
| GET  -> quando acessamos uma página pelo navegador
| POST -> quando enviamos um formulário
|
| Também verificamos $_POST['_method'] para permitir simular outros métodos,
| como PUT, PATCH ou DELETE, usando formulários HTML.
|
| Isso é útil porque formulários HTML suportam apenas GET e POST diretamente.
|
*/
$metodo = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

/*
|--------------------------------------------------------------------------
| Percorre todas as rotas cadastradas
|--------------------------------------------------------------------------
|
| Cada rota possui:
|
| 1. Método HTTP
| 2. Caminho da URL
| 3. Ação que será executada
|
| Exemplo de rota:
|
| ['GET', '/usuarios', 'listarUsuarios']
|
*/
foreach ($rotas as $rota) {
    /*
     * Desestrutura o array da rota.
     *
     * Exemplo:
     *
     * $rota = ['GET', '/usuarios', 'listarUsuarios'];
     *
     * Depois da linha abaixo:
     *
     * $metodoRota = 'GET';
     * $caminhoRota = '/usuarios';
     * $acao = 'listarUsuarios';
     */
    [$metodoRota, $caminhoRota, $acao] = $rota;

    /*
     * Converte rotas com parâmetros em expressões regulares.
     *
     * Exemplo:
     *
     * Rota original:
     * /usuarios/{id}/editar
     *
     * Depois da conversão:
     * /usuarios/([0-9]+)/editar
     *
     * Isso permite que a rota aceite URLs como:
     *
     * /usuarios/1/editar
     * /usuarios/25/editar
     * /usuarios/100/editar
     *
     */
    $padrao = preg_replace('/\{([a-zA-Z]+)\}/', '([0-9]+)', $caminhoRota);

    /*
     * Adiciona os delimitadores da expressão regular.
     *
     * O símbolo ^ indica o início da string.
     * O símbolo $ indica o final da string.
     *
     * Isso garante que a URL acessada precisa bater exatamente com a rota.
     */
    $padrao = "#^{$padrao}$#";

    /*
     * Verifica se:
     *
     * 1. O método da requisição é igual ao método da rota;
     * 2. A URL acessada combina com o padrão da rota.
     *
     * preg_match também captura os parâmetros da URL.
     *
     * Exemplo:
     *
     * URL:
     * /usuarios/10/editar
     *
     * Rota:
     * /usuarios/{id}/editar
     *
     * O valor 10 será capturado dentro de $matches.
     */
    if ($metodo === $metodoRota && preg_match($padrao, $uri, $matches)) {
        /*
         * Remove o primeiro item do array $matches.
         *
         * O primeiro item sempre é a URL completa encontrada.
         *
         * Exemplo antes:
         *
         * [
         *     0 => '/usuarios/10/editar',
         *     1 => '10'
         * ]
         *
         * Depois do array_shift:
         *
         * [
         *     0 => '10'
         * ]
         *
         */
        array_shift($matches);

        /*
         * Executa a ação da rota.
         *
         * Se a ação for uma função simples:
         *
         * 'listarUsuarios'
         *
         * Ela será executada assim:
         *
         * listarUsuarios();
         *
         * Se a rota tiver parâmetros, eles serão enviados para a função.
         *
         * Exemplo:
         *
         * editarUsuario(10);
         *
         */
        return call_user_func_array($acao, $matches);
    }
}

/*
|--------------------------------------------------------------------------
| Rota não encontrada
|--------------------------------------------------------------------------
|
| Se chegou até aqui, significa que nenhuma rota cadastrada
| combinou com a URL e o método HTTP da requisição.
|
| Então retornamos o status HTTP 404.
|
*/
http_response_code(404);

echo "Página não encontrada";
