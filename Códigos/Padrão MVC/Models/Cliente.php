<?php

//Entidade Cliente

class Cliente {

    private $Nome;
    private $CPF;
    private $Cidade;
    private $Estado;

    //Construtor que recebe como parametro os valores dos atributos
    function __construct($campoNome, $campoCPF, $campoCidade, $campoEstado) {
        $this->Nome = $campoNome;
        $this->CPF = $campoCPF;
        $this->Cidade = $campoCidade;
        $this->Estado = $campoEstado;
    }

    function getNome() {
        return $this->Nome;
    }
    function getCPF() {
        return $this->CPF;
    }
    function getCidade() {
        return $this->Cidade;
    }
    function getEstado() {
        return $this->Estado;
    }
}
?>