# Atualização para o mini-framework

## 1. Estrutura final

```txt
info_php_26/
├── index.php
├── .htaccess
└── src/
    ├── kernel/
    │   ├── bootstrap.php
    │   ├── autoload.php
    │   ├── helpers.php
    │   ├── Router.php
    │   └── BaseController.php
    ├── database/
    │   ├── BancoDeDados.php
    │   └── BaseModel.php
    ├── config/
    │   ├── app.php
    │   └── conexao.php
    ├── controllers/
    │   └── funcionario/
    │       └── FuncionarioController.php
    ├── entities/
    │   └── funcionario/
    │       └── FuncionarioEntity.php
    ├── models/
    │   └── funcionario/
    │       └── FuncionarioModel.php
    └── views/
        └── funcionario/
            ├── listar.php
            └── form.php
```

## 2. Configuração de URL

Se acessar pelo navegador assim:

```txt
http://localhost/info_php_26
```

mantenha em `src/config/app.php`:

```php
define("BASE_URL", "/info_php_26");
```

Se acessar direto por:

```txt
http://localhost
```

use:

```php
define("BASE_URL", "");
```

## 3. Banco de dados

Execute o arquivo `database.sql` no MariaDB/MySQL.

## 4. Teste

Acesse:

```txt
http://localhost/info_php_26/
http://localhost/info_php_26/funcionarios
http://localhost/info_php_26/funcionarios/novo
```
