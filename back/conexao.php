<?php

$local = "localhost";
$user = "root";
$pass = "";
$banco = "caixa";

$conexao = mysqli_connect($local, $user, $pass, $banco);

if (!$conexao) {
    echo "falha na conexão";
} else {
    $sql_select = "SELECT * FROM conta WHERE saldo";
    $query = mysqli_query($conexao,$sql_select);
    $result_select = mysqli_fetch_row($query);

    if ($result_select) {
    $saldo = $result_select[0];
    } else {
        $saldo = 0;
    }
    }