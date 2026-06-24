<?php

// CRUD - Create, Read, Update, Delete

class FuncionarioModel {
    private $banco;
    private $tabela = "funcionario";

    public function __construct(BancoDeDados $banco)
    {
        $this->banco = $banco;
    }

    public function listar()
    {
        $sql = "SELECT * FROM {$this->tabela}";
        return $this->banco->execQuery($sql, "Não foi possivel obter os funcionarios.");
    }

}

