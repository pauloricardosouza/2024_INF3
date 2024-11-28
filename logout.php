<?php
    session_start(); //Inicia Sessão
    session_unset(); //Apaga Variáveis de Sessão
    session_destroy(); //Destrói Sessão

    //Redireciona o usuário para o formLogin
    header('location:formLogin.php');
    exit();
?>