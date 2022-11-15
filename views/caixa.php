<?php

session_start();
require("../back/conexao.php")

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/caixa.css">
    <title>Conta</title>
</head>

<body>
    <div class="saldo">
        <div class="container">
            <b>
                <p>Saldo disponível:</p>
                R$<?php
                    echo $saldo;
                    ?>
            </b>
        </div>
    </div>

    <div class="operacoes">
        <div class="container">
            <h3>Saque</h3>

            <form action="../back/sacar.php" method="post">
                <input type="number" min="1" placeholder="Valor para saque: " name="valor_saque">
                <button type="submit">Sacar</button>
            </form>

            <!-- Erro de valor indevido -->
            <?php

            if (isset($_SESSION['valor_indevido'])) {
                echo "<script language='javascript'>
            alert('Insira um valor válido!');
            </script>";
            }
            unset($_SESSION['valor_indevido']);

            ?>

            <!-- Saque efetuado com sucesso -->
            <?php

            if (isset($_SESSION['valor_sacado'])) {
                echo "<script language='javascript'>
            alert('Saque efetuado!');
            </script>";
            }
            unset($_SESSION['valor_sacado']);

            ?>

        </div>

        <div class="container">
            <h3>Depósito</h3>

            <form action="" method="post">
                <input type="number" min="1" name="" placeholder="Valor para depósito: " id="">
                <button type="submit">Depósito</button>
            </form>

        </div>

        <div class="container">
            <h3>Empréstimo</h3>

            <form action="" method="post">
                <input type="number" min="10" name="" placeholder="Valor para empréstimo: " id="">
                <button type="submit">Solicitar empréstimo</button>
            </form>
        </div>
    </div>
</body>

</html>