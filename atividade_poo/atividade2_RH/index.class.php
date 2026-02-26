<?php

class Funcionario {
    protected $nome;
    protected $salaBase;

    public function __construct($nome, $salaBase) {
        $this->nome = $nome;
        $this->salaBase = $salaBase;
    }

    // public function setNome() {
    //     return $this->nome;
    // }

    public function getNome() {
        return $this->nome;
    }

    public function calcularSala() {
        return $this->salaBase;
    }
}

class Gerente extends Funcionario {
    protected $bonus;

    public function __construct($nome, $salaBase, $bonus) {
        parent::__construct($nome, $salaBase);
        $this->bonus = $bonus; 
    }

    public function calcularSala() {
        return $this->salaBase + $this->bonus;
    }
}

class Estagiario extends Funcionario {
    private $auxilioTransporte;

    public function __construct($nome, $salaBase, $auxilioTransporte) {
        return parent::__construct($nome, $salaBase);
        $this->auxilioTransporte = $auxilioTransporte;
    }

    public function calcularSala() {
        return $this->salaBase + $this->auxilioTransporte;
    }
}