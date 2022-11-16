<?php
session_start();
require("conexao.php");

$valor_emprestimo = $_POST['valor_emprestimo'];

$valor_atualizado = $saldo + $$valor_emprestimo;

$sql_update = "UPDATE conta SET saldo = '$valor_atualizado'";
$query = mysqli_query($conexao, $sql_update);
$_SESSION['valor_emprestado'] = true;
header('Location: ../views/caixa.php');