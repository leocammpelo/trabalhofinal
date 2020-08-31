<?php

class ClienteDAO {
   
    function __construct() { }

    function CadastrarCliente($cliente, $connect) {
        $sql = "INSERT INTO cliente (Nome, CPF, Cidade, Estado) VALUES ('" .
                $cliente->getNome() . "','" .
                $cliente->getCPF() . "','" .
                $cliente->getCidade() . "','" .
                $cliente->getEstado() . "'" . ")";
        
        if ($connect->query($sql)) {
            echo "Cadastro do Cliente Concluído!";
        }else {
            echo "ERRO" . $connect->error;
        }       
    }
}

?>