# info_php_26

# Tutorial
- Abrir vscode ver se ta logado ubuntu (canto inferior esquerdo), depois file open folder: seleciona tudo e apaga.

- /var/www/html e da um ok. Após, terminal novo terminal.
git clone LINK_GITHUB da um enter. Novamente, file open folder: seleciona tudo e apaga.

- /var/www/html/curso_php_26 e da um ok. Após, terminal novo terminal verifica se esta em: /var/www/html/curso_php_26.

# MariaDB

CREATE database info_php_26;

CREATE USER 'aluno'@localhost IDENTIFIED BY '1234';

GRANT ALL PRIVILEGES ON \*.\* TO 'aluno'@localhost IDENTIFIED BY '1234';

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

-- Deixa a data e hora automatica no insert e update
ALTER TABLE info_php_26.estados MODIFY COLUMN criadoEm TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
ALTER TABLE info_php_26.estados MODIFY COLUMN atualizadoEm TIMESTAMP DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP;


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