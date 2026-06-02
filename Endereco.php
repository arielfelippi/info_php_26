<?php

class Endereco {
    private $rua;
    private $numero;
    private $bairro;
    private $cidade;
    private $estado;
    private $cep;

    public function __construct($estado, $cidade, $cep, $bairro, $rua, $numero = "S/N") {
        $this->estado = $estado;
        $this->cidade = $cidade;
        $this->cep = $cep;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function validarEndereco() {
        return $this->validarEstado() && $this->validarCidade() && $this->validarCEP() && $this->validarBairro() && $this->validarRua();
    }

    public function validarEstado() {
        if (empty($this->estado)) {
            return false;
        }

        return true;    
    }

    public function validarCidade() {
        if (empty($this->cidade)) {
            return false;
        }

        return true;    
    }

    public function validarCEP() {
        if (empty($this->cep)) {
            return false;
        }

        return true;    
    }

    public function validarBairro() {
        if (empty($this->bairro)) {
            return false;
        }

        return true;    
    }

    public function validarRua() {
        if (empty($this->rua)) {
            return false;
        }

        return true;    
    }
}
