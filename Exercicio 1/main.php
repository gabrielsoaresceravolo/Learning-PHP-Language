<?php

require_once "pessoa.php";
require_once "pessoaFisica.php";
require_once "pessoaJuridica.php";

$PF = new PessoaFisica("Victor", "Rua: Aquela lá", "574.910.200.00");
$PJ = new PessoaJuridica("Jonas", "Rua: Essa dai", "55.229.418/0001-67");

$PF -> imprimir();
$PJ -> imprimir();

?>