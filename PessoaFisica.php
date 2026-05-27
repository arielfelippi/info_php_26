<?php

class PessoaFisica extends Pessoa {
    private $cpf;

    public function __construct($nome, $idade, $telefone, Endereco $endereco, $cpf) {
        parent::__construct($nome, $idade, $telefone, $endereco);
        $this->cpf = $cpf;
    }
}
