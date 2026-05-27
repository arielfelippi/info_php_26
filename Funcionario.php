<?php

class Funcionario {
    private $nome;
    private $sobrenome;
    private $salario;
    private $cargo;
    private $setor;
    private $cracha;

    public function __construct($nome, $sobrenome, $salario, $cargo, $setor, $cracha) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->salario = $salario;
        $this->cargo = $cargo;
        $this->setor = $setor;
        $this->cracha = $cracha;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getSetor() {
        return $this->setor;
    }

    public function getCracha() {
        return $this->cracha;
    }
}
