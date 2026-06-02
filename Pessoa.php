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

        if (!$this->validarPessoa()) {
            throw new InvalidArgumentException("Dados da pessoa inválidos");
        }
    }
    
    public function resetarPessoa() {
        $this->nome = "";
        $this->idade = "";
        $this->telefone = "";
        $this->endereco = new Endereco("", "", "", "", "", ""); // Resetando o endereço para um objeto vazio
    }

    public function validarPessoa() {
        return $this->validarNome() && $this->validarIdade() && $this->validarTelefone() && $this->validarEndereco();
    }

    public function validarNome() {
         // FALSY são valores que são considerados falsos em PHP,
         // como: "", 0, 0.0, "0", null, false, array() || [] (array vazio) e objetos sem propriedades.
        if (empty($this->nome)) {
            return false;
        }

        return true;    
    }

    public function validarIdade() {
        $idadeInvalida = !is_numeric($this->idade) || $this->idade < 0 || $this->idade > 200;

        if ($idadeInvalida) {
            return false;
        }

        return true;
    }

    public function validarTelefone() {
        $telefoneInvalido = empty($this->telefone);

        if ($telefoneInvalido) {
            return false;
        }

        return true;
    }

    public function validarEndereco() {
        $naoEhndereco = empty($this->endereco) || !($this->endereco instanceof Endereco);

        if ($naoEhndereco) {
            return false;
        }

        return true;
    }
}
