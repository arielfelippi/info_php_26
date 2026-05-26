<?php

// POO || OOP - Programação Orientada a Objetos

class Carro {
    const COMBUSTIVEL = "Gasolina"; // Constante da classe Carro
    private $marca;
    private $modelo;
    private $ano;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getAno() {
        return $this->ano;
    }

    public function exibirInformacoes() {
        echo nl2br("Marca: " .  $this->marca . "\n");
        echo nl2br("Combustivel: " . self::COMBUSTIVEL . "\n");
        echo nl2br("Modelo: " . $this->modelo . "\n");
        echo nl2br("Ano: " . $this->ano . "\n");
    }

    public function __toString() {
        $this->exibirInformacoes();
    }

} // Fim da classe Carro

// Criando um objeto da classe Carro
// __construct($marca, $modelo, $ano)
$marca = "Toyota";
$meuCarro = new Carro($marca, "Corolla", 2020); // Instanciando um objeto da classe Carro
$meuCarro->exibirInformacoes(); // Chamando o método para exibir as informações do carro

echo "<br>";

$marca = "Honda";
$meuCarro = new Carro($marca, "Civic", 2022); 
$meuCarro->exibirInformacoes();

