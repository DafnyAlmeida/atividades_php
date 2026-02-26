<?php

class Wilson {
    private $personalidade;
    private $idade;
    private $altura;
    public $sexo;

    public function __construct($personalidade, $idade, $altura, $sexo = "Masculino?") {
        $this->personalidade = $personalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->sexo = $sexo;
    }

    public function xingar($personalidade) {
        if ($personalidade == "Raivosa") {
            echo "Ele xinga você-";
        }
    }

}
