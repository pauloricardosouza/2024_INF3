<?php

    include("conexaoBD.php"); //Inclui o arquivo de conexão
    session_start(); //Iniciar uma sessão

    //Cria variáveis e utiliza a função myqli_real_escapa_string para evitar SQL Injection
    $emailUsuario = mysqli_real_escape_string($conn, $_POST["emailUsuario"]);
    $senhaUsuario = mysqli_real_escape_string($conn, $_POST["senhaUsuario"]);

    //Cria uma variável para armazenar a QUERY para Login
    $buscarLogin = "SELECT *
                    FROM Usuarios
                    WHERE emailUsuario = '{$emailUsuario}'
                    AND senhaUsuario = md5('{$senhaUsuario}')
                    ";
    
    //Armazena o resultado da execução da QUERY na variável $efetuarLogin (booleana)
    $efetuarLogin = mysqli_query($conn, $buscarLogin);
    $quantidadeLogin = 0;

    if($registro = mysqli_fetch_assoc($efetuarLogin)){
        $quantidadeLogin = mysqli_num_rows($efetuarLogin);

        //Cria variáveis PHP para armazenar os registros encontrados no BD
        $idUsuario       = $registro['idUsuario'];
        $fotoUsuario     = $registro['fotoUsuario'];
        $emailUsuario    = $registro['emailUsuario'];
        $nomeUsuario     = $registro['nomeUsuario'];
        $tipoUsuario     = $registro['tipoUsuario'];

        //Cria variáveis de SESSÃO para armazenar os registros das variáveis PHP
        $_SESSION['idUsuario']    = $idUsuario;
        $_SESSION['fotoUsuario']  = $fotoUsuario;
        $_SESSION['emailUsuario'] = $emailUsuario;
        $_SESSION['nomeUsuario']  = $nomeUsuario;
        $_SESSION['tipoUsuario']  = $tipoUsuario;

        $_SESSION['logado']       = true;
        $_SESSION['ultimoAcesso'] = time();

        header('location:index.php'); //Redireciona para a página index.php
    }
    elseif(empty($_POST['emailUsuario']) || empty($_POST['senhaUsuario']) || $quantidadeLogin == 0){
        header('location:formLogin.php?erroLogin=dadosInvalidos');
    }

?>