<?php

class Veiculo 
{
    // Atributos
    private $nome;
    private $montadora;
    private $anoFabricacao;
    private $anoModelo;
    private $cor;
    private $placa;
    private $valorIPVA;
    private $IPVApago;

    // Construtores
    public function __construct($nome, $montadora, $anoFabricacao, $anoModelo, $cor, $placa, $valorIPVA) 
    {
        $this->nome = $nome;
        $this->montadora = $montadora;
        $this->anoFabricacao = $anoFabricacao;
        $this->anoModelo = $anoModelo;
        $this->cor = $cor;
        $this->placa = $placa;
        $this->valorIPVA = $valorIPVA;
        $this->IPVApago = false; // Por padrão, IPVA não está pago ao criar um veículo
    }

    // Getters e Setters
    public function getNome() 
    {
        return $this->nome;
    }

    public function setNome($nome) 
    {
        $this->nome = $nome;
    }

    // =======================================

    public function getMontadora() 
    {
        return $this->montadora;
    }

    public function setMontadora($montadora) 
    {
        $this->montadora = $montadora;
    }

    // =======================================

    public function getAnoFabricacao() 
    {
        return $this->anoFabricacao;
    }

    public function setAnoFabricacao($anoFabricacao) 
    {
        $this->anoFabricacao = $anoFabricacao;
    }

    // =======================================

    public function getAnoModelo() 
    {
        return $this->anoModelo;
    }

    public function setAnoModelo($anoModelo) 
    {
        $this->anoModelo = $anoModelo;
    }

    // =======================================

    public function getCor() 
    {
        return $this->cor;
    }

    public function setCor($cor) 
    {
        $this->cor = $cor;
    }

    // =======================================

    public function getPlaca() 
    {
        return $this->placa;
    }

    public function setPlaca($placa) 
    {
        $this->placa = $placa;
    }

    // =======================================

    public function getValorIPVA() 
    {
        return $this->valorIPVA;
    }

    public function setValorIPVA($valorIPVA) 
    {
        $this->valorIPVA = $valorIPVA;
    }

    // =======================================

    public function isIPVApago() 
    {
        return $this->IPVApago;
    }

    public function setIPVApago($IPVApago) 
    {
        $this->IPVApago = $IPVApago;
    }

    // =======================================

    // IPVA pago?
    public function verificarStatusIPVA() 
    {
        return $this->IPVApago;
    }

    // Pagar o IPVA
    public function pagarIPVA() 
    {
        $this->IPVApago = true;
    }

    // Método para atualizar o valor do IPVA com um reajuste percentual
    public function atualizarValorIPVA($reajuste) 
    {
        $this->valorIPVA *= (1 + $reajuste / 100);
    }

    public function imprime() 
    {
        echo "Nome: " . $this->nome . "<br>";
        echo "Montadora: " . $this->montadora . "<br>";
        echo "Ano de Fabricação: " . $this->anoFabricacao . "<br>";
        echo "Ano do Modelo: " . $this->anoModelo . "<br>";
        echo "Cor: " . $this->cor . "<br>";
        echo "Placa: " . $this->placa . "<br>";
        echo "Valor do IPVA: " . $this->valorIPVA . "<br>";
        echo "IPVA Pago: " . ($this->IPVApago ? "Sim" : "Não") . "<br>";
    }
}


?>