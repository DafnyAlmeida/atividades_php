<?php

class Carro {
    private $marca;
    private $modelo;
    private $velocidade;

    public function __construct($marca, $modelo, $velocidade) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->setVelocidade($velocidade);
    }

    public function setVelocidade($velocidade) {
        if ($velocidade < 0) {
            throw new Exception("Velocidade não pode ser negativa");
        } 
        $this->velocidade = $velocidade;
    }

    public function getVelocidade() {
        return $this->velocidade;
    }

    public function acelerar() {
        return $this->velocidade += 10;
    }

    public function frear() {
        if ($this->velocidade <= 10) {
            return $this->velocidade = 0;
        } else {
           return $this->velocidade -= 10; 
        }
    }
}

$carro1 = new Carro("Ferrari", "ROMA", 320);
$carro1->acelerar();
echo "A velocidade atual é " . $carro1->getVelocidade();


class Pessoa {
    private $nome;
    private $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->setIdade($idade);
    }

    public function setIdade($idade) {
        if ($idade < 0) {
            throw new Exception("Velocidade não pode ser negativa");
        }

        $this->idade = $idade;
    }

    public function getDados() {
        echo "Olá {$this->nome}, você tem {$this->idade} anos";
    }
}

echo "<br>";

$pessoa1 = new Pessoa("Ana", 16);
$pessoa1->getDados();

class ContaBancaria {
    private $saldo;

    public function __construct($saldo) {
        $this->setSaldo($saldo);
    }

    public function setSaldo($saldo) {
        if ($saldo < 0) {
            throw new Exception("Velocidade não pode ser negativa");
        }

        $this->saldo = $saldo;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if ($this->saldo <= 0 || $this->saldo < $valor) {
            throw new Exception("Não há nada para sacar");
        }

        $this->saldo -= $valor;
    }
}
echo "<br>";
$conta = new ContaBancaria(1200);
echo $conta->getSaldo();
echo "<br>";
$conta->sacar(1000);
echo $conta->getSaldo();