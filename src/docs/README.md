# info_php_26

# Tutorial
- Abrir vscode ver se ta logado ubuntu (canto inferior esquerdo), depois file open folder: seleciona tudo e apaga.

- /var/www/html e da um ok. Após, terminal novo terminal.
git clone LINK_GITHUB da um enter. Novamente, file open folder: seleciona tudo e apaga.

- /var/www/html/curso_php_26 e da um ok. Após, terminal novo terminal verifica se esta em: /var/www/html/curso_php_26.

# Configurar apache para aceitar rotas
- Editar o arquivo
```bash
sudo vim /etc/apache2/sites-available/000-default.conf
```

- Para editar pressionar a tecla insert

- Adcionar o conteudo de directory(abaixo): <Directory "/var/www/html/">...</Directory>

```bash
   <VirtualHost *:80>
      ServerName localhost
      ServerAlias localhost
      DocumentRoot "/var/www/html"
      <Directory "/var/www/html/">
         Options +Indexes +Includes +FollowSymLinks +MultiViews
         AllowOverride All
         Require all granted
      </Directory>
   </VirtualHost>
```

- Para sair do editor VIM pressionar `ESC` seguido de `:wq!`
- Executar o comando:
```bash
   sudo a2enmod rewrite
```

- Parar e Iniciar o apache:
   - ```bash
         sudo service apache2 stop
      ```
   - ```bash
         sudo service apache2 start
      ```


# MariaDB

## Executar no terminal os comandos abaixo
sudo service mariadb start

sudo mysql -uroot -p

```BASH
   CREATE database info_php_26;

   SHOW DATABASES;

   CREATE USER 'aluno'@localhost IDENTIFIED BY '1234';

   GRANT ALL PRIVILEGES ON *.* TO 'aluno'@localhost IDENTIFIED BY '1234';

   flush privileges;
```

https://phoenixnap.com/kb/how-to-create-mariadb-user-grant-privileges#:~:text=To%20create%20a%20new%20MariaDB,
to%20a%20local%20MySQL%20server.

set session sql_mode = 'No_engine_substitution';

```SQL
-- Retornar se o filtro for atendido
select u.* from usuario as u
inner join pessoa_fisica as pf
ON u.id = pf.usuario_alteracao;

-- Retornar tudo(usuario + Pessoa_fisica) se encontrar
-- senao retorna os dados de usuario
select u.* from usuario as u
left join pessoa_fisica as pf
ON u.id = pf.usuario_alteracao;


-- Retornar tudo(Pessoa_fisica + usuario) se encontrar
-- senao retorna os dados da Pessoa_fisica
select u.* from usuario as u
right join pessoa_fisica as pf
ON u.id = pf.usuario_alteracao;



-- TODOS ENDERECOS USADOS EM PESSOAS
SELECT p.id as "idPessoa", p.nome as "nomePessoa", p.cpf, ende.estado, ende.cidade, ende.cep, ende.bairro, ende.rua, ende.numero
FROM endereco ende
JOIN pessoa p ON ende.id = p.idEndereco;

SELECT p.id as "idPessoa", p.nome as "nomePessoa", p.cpf, ende.estado, ende.cidade, ende.cep, ende.bairro, ende.rua, ende.numero
FROM endereco ende
INNER JOIN pessoa p ON ende.id = p.idEndereco
WHERE UPPER(ende.cidade) like "%BG%";

SELECT p.id as "idPessoa", p.nome as "nomePessoa", p.cpf, ende.estado, ende.cidade, ende.cep, ende.bairro, ende.rua, ende.numero
FROM endereco ende
left JOIN pessoa p ON ende.id = p.idEndereco;


SELECT p.id as "idPessoa", p.nome as "nomePessoa", p.cpf, ende.estado, ende.cidade, ende.cep, ende.bairro, ende.rua, ende.numero
FROM endereco ende
right JOIN pessoa p ON ende.id = p.idEndereco;

SELECT p.id as "idPessoa", p.nome as "nomePessoa", p.cpf, func.cargo, func.cracha, func.salario
FROM funcionario func
INNER JOIN pessoa p ON func.idPessoa = p.id;

-- Adicionar campos e deixar a data e hora automatica no insert e update
ALTER TABLE info_php_26.funcionario ADD criadoEm TIMESTAMP NULL;
ALTER TABLE info_php_26.funcionario ADD atualizadoEm TIMESTAMP NULL;

ALTER TABLE info_php_26.funcionario MODIFY COLUMN criadoEm TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
ALTER TABLE info_php_26.funcionario MODIFY COLUMN atualizadoEm TIMESTAMP DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP;

-- OU tudo em um unico SQL
ALTER TABLE info_php_26.cidades ADD criadoEm TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
ALTER TABLE info_php_26.cidades ADD atualizadoEm TIMESTAMP DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP;


-- Campos comuns de todas as tabelas:
   -- id(pk)(tinyint), criadoEm(TIMESTAMP/DATETIME), atualizadoEm(TIMESTAMP/DATETIME)
-- Criar tabela de estados
-- Criar tabela de cidades
  -- DICA: Site do IBGE tem as informações.
-- Criar FKs dessas tabelas em endereco(tabela) com alter table
   -- alterar os campos para idEstado e idCidade
-- Criar tabela de usuarios
-- Criar FK de pessoa na tabela usuario
```