<?php

include_once '../Models/Cliente.php';
include_once '../Persistence/Connection.php';
include_once '../Persistence/ClienteDAO.php';

$Nome = $_POST['campoNome'];
$CPF =  $_POST['campoCPF'];
$Cidade = $_POST['campoCidade'];
$Estado = $_POST['campoEstado'];

$conexao = new Connection();
$conexao = $conexao->getConnection();

$cliente = new Cliente($Nome, $CPF, $Cidade, $Estado);
 
$clienteDao = new ClienteDAO();
$clienteDao->CadastrarCliente($cliente, $conexao);

?>