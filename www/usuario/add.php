<?php
    include '../bd_control/conecta.php';
    include 'usuario_control.php';

    $nome_usuario = $_POST['usuario_nome'];
    $senha_usuario = $_POST['usuario_senha'];

    if (insert_usuario($conexao, $nome_usuario, $senha_usuario)) {
        header("Location: ../usuario/usuario_add.php?add=1");
        die();
    } else {
        $msg = mysqli_error($conexao);
        header("Location: ../usuario/usuario_add.php?add=0&error={$msg}");
        die();

    }
