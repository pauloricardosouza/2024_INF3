<?php include "header.php"; ?>

<?php
    //Bloco para declaração de variáveis PHP
    $fotoUsuario = $nomeUsuario = $cidadeUsuario = $telefoneUsuario = $emailUsuario = $senhaUsuario = $confirmarSenhaUsuario = "";
    $erroPreenchimento = false;

    //Verifica o método de requisição do formulário
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        //Validação do campo nomeUsuario utilizando a função empty
        if(empty($_POST["nomeUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>NOME</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        }
        else {
            $nomeUsuario = $_POST["nomeUsuario"];
        }

        //Validação do campo cidadeUsuario utilizando a função empty
        if(empty($_POST["cidadeUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>CIDADE</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        }
        else {
            $cidadeUsuario = $_POST["cidadeUsuario"];
        }

        //Validação do campo telefoneUsuario utilizando a função empty
        if(empty($_POST["telefoneUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>TELEFONE</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        }
        else {
            $telefoneUsuario = $_POST["telefoneUsuario"];
        }

        //Validação do campo emailUsuario utilizando a função empty
        if(empty($_POST["emailUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>EMAIL</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        }
        else {
            $emailUsuario = $_POST["emailUsuario"];
        }

        //Validação do campo senhaUsuario utilizando a função empty
        if(empty($_POST["senhaUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>SENHA</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        }
        else {
            $senhaUsuario = $_POST["senhaUsuario"];
        }

        //Validação do campo confirmarSenhaUsuario utilizando a função empty
        if(empty($_POST["confirmarSenhaUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>CONFIRMAR SENHA</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        }
        else {
            $confirmarSenhaUsuario = $_POST["confirmarSenhaUsuario"];
        }

    }
?>

<?php include "footer.php"; ?>