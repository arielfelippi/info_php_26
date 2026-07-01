<?php

class Funcionario {
    private FuncionarioModel $funcionarioModel;
    private $nome;
    private $sobrenome;
    private $salario;
    private $cargo;
    private $setor;
    private $cracha;
    private $idPessoa;

    public function __construct(FuncionarioModel $funcionarioModel) {
        $this->funcionarioModel = $funcionarioModel;
    }

    private function construirFuncionario($dados) {
        $this->nome = $dados->nome ?? $this->getNome();
        $this->sobrenome = $dados->sobrenome ?? $this->getSobrenome();
        $this->salario = $dados->salario ?? $this->getSalario();
        $this->cargo = $dados->cargo ?? $this->getCargo();
        $this->setor = $dados->setor ?? $this->getSetor();
        $this->cracha = $dados->cracha ?? $this->getCracha();
        $this->idPessoa = $dados->idPessoa ?? $this->getIdPessoa();
    }

    private function toArray() {
        return [
            'nome' => $this->nome ?? $this->getNome(),
            'sobrenome' => $this->sobrenome ?? $this->getSobrenome(),
            'salario' => $this->salario ?? $this->getSalario(),
            'cargo' => $this->cargo ?? $this->getCargo(),
            'setor' => $this->setor ?? $this->getSetor(),
            'cracha' => $this->cracha ?? $this->getCracha(),
            'idPessoa' => $this->idPessoa ?? $this->getIdPessoa(),
        ];
    }

    public function __toString()
    {
        return implode(", ", $this->toArray());
    }

    public function criar($dados) {
        $this->construirFuncionario($dados);
        return $this->funcionarioModel->criar($this->toArray());
    }

    public function atualizar($id, $dados) {
        $this->construirFuncionario($dados);
        return $this->funcionarioModel->atualizar($id, $this->toArray());
    }

    public function listar($filtros = []) {
        return $this->funcionarioModel->listar($filtros);
    }

    public function listarPorId($id) {
        $funcionario = $this->funcionarioModel->listarPorId($id);
        
        $this->construirFuncionario($funcionario[0] ?? []);
        
        return $this;
    }

    public function excluir($id) {
        return $this->funcionarioModel->excluir($id);
    }

    public function getId() {
        return $this->id ?? 0;
    }

    public function getIdPessoa() {
        return $this->idPessoa ?? 0;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function getSetor() {
        return $this->setor;
    }

    public function setSetor($setor) {
        $this->setor = $setor;
    }

    public function getCracha() {
        return $this->cracha;
    }

    public function setCracha($cracha) {
        $this->cracha = $cracha;
    }
}
