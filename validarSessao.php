<?php
    session_start(); //Iniciar Sessão

    if(!isset($_SESSION['logado']) || $_SESSION['logado'] === false){
        header('location:formLogin.php?erroLogin=naoLogado');
    }
    else{
        $tipoUsuario = $_SESSION['tipoUsuario'];
        if($_SESSION['tipoUsuario'] != "admin"){
            header('location:formLogin.php?erroLogin=acessoProibido');
        }
    }
?>