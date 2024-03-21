<?php

class Pessoa
{
    //  Atributos
    private $nome;
    private $endereco;

    //  Construtor
    function __contruct($nome, $endereco)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    //  ========================================================================

    //  GETTERS

    function get_nome($nome)
    {
        $this->nome = $nome;
    }
    function get_endereco($endereco)
    {
        $this->endereco = $endereco;
    }

    //  SETTERS

    function set_nome($nome)
    {
        $this->nome = $nome;
    }
    function set_endereco($endereco)
    {
        $this->endereco = $endereco;
    }

    //  ========================================================================

    //  Métodos
    function imprimir()
    {
        return ("<br>Nome: " . $this -> nome . "Endereço: ". $this->endereco);
    }
}

?>