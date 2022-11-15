<?php

session_start();
require("conexao.php");

//variáveis do saque
$valor_saque = $_POST['valor_saque'];

if ($valor_saque > $saldo || $valor_saque == 0) {
    $_SESSION['valor_indevido'] = true;
    header('Location: ../views/caixa.php');
} else {
    $valor_atualizado = $saldo - $valor_saque;

    $sql_uptade = "UPDATE conta SET saldo = '$valor_atualizado'";
    $query = mysqli_query($conexao, $sql_update);
    $_SESSION['valor_sacado'] = true;
    header('Location: ../views/caixa.php');
}