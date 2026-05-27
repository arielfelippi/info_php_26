<?php

abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $telefone;
    protected Endereco $endereco;

    public function __construct($nome, $idade, $telefone, Endereco $endereco) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
    }
}
