<?php

class PessoaFisica extends Pessoa
{
    //  Atributos
    private $cpf;

    //  Construtor
    function __construct($nome, $endereco, $cpf)
    {
        parent::__construct($nome, $endereco);
        $this->cpf = $cpf;
    }

    //  ========================================================================

    //  GETTERS

    function get_cpf($cpf)
    {
        $this->cpf = $cpf;
    }

    //  SETTERS

    function set_cpf($cpf)
    {
        $this->cpf = $cpf;
    }

    //  ========================================================================

    //  Métodos
    function imprimir()
    {
        $dados = parent::imprimir();
        return ($dados . " CPF: " . $this -> cpf . "<br>");
    }
}

?>