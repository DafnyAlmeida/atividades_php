<?php
include "index.class.php";

$carlos = new Gerente("Carlos", 5000, 600);
$ana = new Estagiario("Ana", 1200, 200 );

$salaCarlos = $carlos->calcularSala();
$salaAna = $ana->calcularSala();

echo "O salário final do gerente Carlos é: R$ " . number_format($salaCarlos, 2, ",", ".") . ". O salário final da estagiária Ana é: R$" . number_format($salaAna, 2, ",", ".");