<?php

require_once "BaseModel.php";

class FuncionarioModel extends BaseModel {

    public function __construct(BancoDeDados $banco)
    {
        parent::__construct($banco);

        $this->tabela = "funcionario";
    }
}
