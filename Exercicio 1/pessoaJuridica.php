<?php

class PessoaJuridica extends Pessoa
{
    //  Atributos
    private $cnpj;

    //  Construtor
    function __construct($nome, $endereco, $cnpj)
    {
        parent::__construct($nome, $endereco);
        $this->cnpj = $cnpj;
    }

    //  ========================================================================

    //  GETTERS

    function get_cnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    //  SETTERS

    function set_cnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    //  ========================================================================

    //  Métodos
    function imprimir()
    {
        $dados = parent:: imprimir();
        return ($dados . " CNPJ: " . $this -> cnpj . "<br>");
    }
}

?>