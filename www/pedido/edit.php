<?php
    include '../bd_control/conecta.php';
    include 'pedido_control.php';

    $ID = $_POST['ID'];
    $quant = $_POST['qnt_jogos'];
    $quant = json_decode($quant, true);
    $jogos = $_POST['jogos'];
    $jogos_antigos = $_POST['jogos_antigo'];


    $frete = ($_POST['frete'] == "") ? NULL:$_POST['frete'];
    $metodo_pagamento = $_POST['met_pag'];
    $valor_total = $_POST['valor_total'];

    if (alter_pedido($conexao, $frete, $valor_total, $metodo_pagamento, $ID)) {
        if ((strcmp($jogos_antigos, $jogos) == 0)) {
            $jogos = explode(',', $jogos);
            if (alter_produtos_pedido($conexao, $jogos, $quant, $ID)) {
                header("Location: ../pedido.php?alter=1");
                die();
            } else {
                $msg = mysqli_error($conexao);
                header("Location: ../pedido.php?alter=0&error={$msg}");
                echo "{$msg}";
                die();
            }
        } else {
            $jogos = explode(',', $jogos);
            if (remove_produtos_pedido($conexao, $ID)) {
                if (produtos_pedido($conexao, $jogos, $quant)) {
                    header("Location: ../pedido.php?alter=1");
                    die();
                } else {
                    $msg = mysqli_error($conexao);
                    header("Location: ../pedido.php?alter=0&error={$msg}");
                    echo "{$msg}";
                    die();
                }
            } else {
                $msg = mysqli_error($conexao);
                header("Location: ../pedido.php?alter=0&error={$msg}");
                echo "{$msg}";
                die();
            }
        }
    } else {
        $msg = mysqli_error($conexao);
        header("Location: ../pedido.php?alter=0&error={$msg}");
        echo "{$msg}";
        die();
    }
