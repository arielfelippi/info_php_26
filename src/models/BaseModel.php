<?php

interface BaseModelInterface {
    public function listar($filtros = [], $limite = 20, $offset = 0);
    public function listarPorId($id);
    public function excluir($id);
    public function criar($dados);
    public function atualizar($id, $dados);
}

class BaseModel {
    private BancoDeDados $banco;
    public $tabela = "";

    public function __construct(BancoDeDados $banco)
    {
        $this->banco = $banco;
    }

    public function validarTabela() {
        if (empty($this->tabela)) {
            $erro = "A tabela não foi definida ou é inválida. Tabela: " . $this->tabela . " - Classe: " . get_class($this);

            throw new Exception($erro);
        }
    }

    public function listar($filtros = [], $limite = 20, $offset = 0)
    {
        $this->validarTabela();

        $sql = "SELECT * FROM {$this->tabela}"; // SELECT * FROM funcionario 

        if (!empty($filtros)) {
            $where = [];

            foreach ($filtros as $campo => $valor) {
                $where[] = "$campo = '$valor'";
            }
            
            $sql .= " WHERE " . implode(" AND ", $where);
            /**
             * SELECT * FROM funcionario WHERE nome  = 'Ariel' AND sobrenome = 'Silva';
             */
        }

        $sql .= " LIMIT $limite OFFSET $offset";

        return $this->banco->execQuery($sql, "Não foi possivel obter os funcionarios.");
    }

    public function listarPorId($id) {
        $this->validarTabela();

        $sql = "SELECT * FROM {$this->tabela} WHERE id = $id LIMIT 1";
        return $this->banco->execQuery($sql, "Não foi possivel obter o funcionario.");
    }

    public function excluir($id) {
        $this->validarTabela();

        $sql = "DELETE FROM {$this->tabela} WHERE id = $id";

        return $this->banco->execQuery($sql, "Não foi possivel excluir o funcionario.");
    }
    
    public function criar($dados) {
        $this->validarTabela();

        $campos = implode(", ", array_keys($dados));
        $valores = implode("', '", array_values($dados));

        $sql = "INSERT INTO {$this->tabela} ($campos) VALUES ('$valores')";

        return $this->banco->execQuery($sql, "Não foi possivel criar o funcionario.");
    }

    public function atualizar($id, $dados) {
        $this->validarTabela();

        $set = [];

        foreach ($dados as $campo => $valor) {
            $set[] = "$campo = '$valor'";
        }

        $setString = implode(", ", $set);

        $sql = "UPDATE {$this->tabela} SET $setString WHERE id = $id";

        return $this->banco->execQuery($sql, "Não foi possivel atualizar o funcionario.");
    }

}
