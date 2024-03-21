<?php

require_once "veiculo.php";

// $nome, $montadora, $anoFabricacao, $anoModelo, $cor, $placa, $valorIPVA, $IPVApago
$veiculo1 = new Veiculo("Carro", "Chevrolet", 2022, 2023, "Preto", "Cruze Sport6 RS", 15000.0, false);
$veiculo2 = new Veiculo("Carro", "Ford", 2020, 2021, "branco", "Fox Flashback", 35000.0, false);
$veiculo3 = new Veiculo("Carro", "Mazda", 2020, 2021, "branco", "RX7", 3500.0, false);

// Imprimindo os dados do veículo
$veiculo2->imprime();
$veiculo3->imprime();
$veiculo4->imprime();

// Informações de IPVA do veículo
echo "Status do IPVA: " . ($veiculo1->verificarStatusIPVA() ? "Pago" : "Não pago") . "\n";
echo "Status do IPVA: " . ($veiculo2->verificarStatusIPVA() ? "Pago" : "Não pago") . "\n";
echo "Status do IPVA: " . ($veiculo3->verificarStatusIPVA() ? "Pago" : "Não pago") . "\n";

$veiculo1->pagarIPVA();
$veiculo2->pagarIPVA();
$veiculo3->pagarIPVA();

echo "Status do IPVA após pagar: " . ($veiculo1->verificarStatusIPVA() ? "Pago" : "Não pago") . "\n";
echo "Status do IPVA após pagar: " . ($veiculo2->verificarStatusIPVA() ? "Pago" : "Não pago") . "\n";
echo "Status do IPVA após pagar: " . ($veiculo3->verificarStatusIPVA() ? "Pago" : "Não pago") . "\n";

?>
