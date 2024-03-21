<?php

require_once "carro.php";

$carro1 = new Carro(" Mustang Shelby", "Preto", "CSG0-2024", 2);
$carro2 = new Carro(" 812 Competizione", "Branco", "FEAR-6464", 2);

//  ============================================================================

//  AÇÕES DOS OBJETOS

$carro1 -> ligar();
$carro1 -> acelerar();
$carro1 -> frear();
$carro1 -> seta("esquerda");
$carro1 -> desligar();

//  ================

$carro2 -> ligar();
$carro2 -> acelerar();
$carro2 -> frear();
$carro2 -> seta("direita");
$carro2 -> desligar();

?>