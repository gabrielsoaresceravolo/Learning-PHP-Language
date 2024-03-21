<?php

class Carro
{
    //  Atributos
    private $modelo;
    private $cor;
    private $placa;
    private $numeroPortas;

    //  Construtor
    function __construct($modelo, $cor, $placa, $numeroPortas)
    {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->placa = $placa;
        $this->numeroPortas = $numeroPortas;
    }

    //  ========================================================================

    //  GETTERS

    function get_modelo($modelo)
    {
        $this->modelo = $modelo;
    }
    function get_cor($cor)
    {
        $this->cor = $cor;
    }
    function get_placa($placa)
    {
        $this->placa = $placa;
    }
    function get_numeroPortas($numeroPortas)
    {
        $this->numeroPortas = $numeroPortas;
    }

    //  SETTERS

    function set_modelo($modelo)
    {
        $this->modelo = $modelo;
    }
    function set_cor($cor)
    {
        $this->cor = $cor;
    }
    function set_placa($placa)
    {
        $this->placa = $placa;
    }
    function set_numeroPortas($numeroPortas)
    {
        $this->numeroPortas = $numeroPortas;
    }

    //  ========================================================================

    //  Métodos
    function ligar()
    {
        echo "O carro" . $this -> modelo . " está Ligado!<br><br>";
    }

    function desligar()
    {
        echo "O carro" . $this -> modelo . " está Desligado!<br><br>";
    }

    function acelerar()
    {
        echo "O carro" . $this -> modelo . " está Acelerando...<br><br>";
    }

    function frear()
    {
        echo "O carro" . $this -> modelo . " está freando...<br><br>";
    }

    function seta($orientacao)
    {
        if($orientacao == "esquerda")
            echo "O carro" . $this -> modelo . " está dando seta para a esquerda <br><br>";
        else if($orientacao == "direita")
            echo "O carro" . $this -> modelo . " está dando seta para a direita <br><br>";
        else
            echo "O carro" . $this -> modelo . " está com a seta desligada <br><br>";
    }
}

?>