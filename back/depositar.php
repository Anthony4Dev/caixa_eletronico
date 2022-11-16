<?php

session_start();
require("conexao.php");

//variáveis
$valor_deposito = $_POST['$valor_deposito'];

if ($valor_deposito < 0) {
    $_SESSION['valor_indevido'] = true;
    header('Location: ../views/caixa.php');
} else {
    $valor_atualizado = $saldo + $valor_deposito;
    
    $sql_update = "UPDATE conta SET saldo = '$valor_atualizado'";
    $query = mysqli_query($conexao, $sql_update);
    $_SESSION['valor_depositado'] = true;
    header('Location: ../views/caixa.php');
}