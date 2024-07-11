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
            $nomeUsuario = filtrar_entrada($_POST["nomeUsuario"]);
        }

        //Validação do campo cidadeUsuario utilizando a função empty
        if(empty($_POST["cidadeUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>CIDADE</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        }
        else {
            $cidadeUsuario = filtrar_entrada($_POST["cidadeUsuario"]);
        }

        //Validação do campo telefoneUsuario utilizando a função empty
        if(empty($_POST["telefoneUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>TELEFONE</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        }
        else {
            $telefoneUsuario = filtrar_entrada($_POST["telefoneUsuario"]);
        }

        //Validação do campo emailUsuario utilizando a função empty
        if(empty($_POST["emailUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>EMAIL</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        }
        else {
            $emailUsuario = filtrar_entrada($_POST["emailUsuario"]);
        }

        //Validação do campo senhaUsuario utilizando a função empty
        if(empty($_POST["senhaUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>SENHA</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        }
        else {
            $senhaUsuario = md5(filtrar_entrada($_POST["senhaUsuario"]));
        }

        //Validação do campo confirmarSenhaUsuario utilizando a função empty
        if(empty($_POST["confirmarSenhaUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>CONFIRMAR SENHA</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        }
        else {
            $confirmarSenhaUsuario = md5(filtrar_entrada($_POST["confirmarSenhaUsuario"]));
            if($senhaUsuario != $confirmarSenhaUsuario){
                echo "<div class='alert alert-warning text-center'>As <strong>SENHAS</strong> não coincidem!</div>";
                $erroPreenchimento = true;
            }
        }

        //Se não houverem erros de preenchimento, exibe os dados cadastrados!
        if(!$erroPreenchimento){
            echo "
                <div class='alert alert-success text-center'><strong>Usuário</strong> cadastrado com sucesso!</div>
                <div class='container mt-3'>
                    <div class='table-responsive'>
                        <table class='table'>
                            <tr>
                                <th>NOME</th>
                                <td>$nomeUsuario</td>
                            </tr>
                            <tr>
                                <th>CIDADE</th>
                                <td>$cidadeUsuario</td>
                            </tr>
                            <tr>
                                <th>TELEFONE</th>
                                <td>$telefoneUsuario</td>
                            </tr>
                            <tr>
                                <th>EMAIL</th>
                                <td>$emailUsuario</td>
                            </tr>
                            <tr>
                                <th>SENHA</th>
                                <td>$senhaUsuario</td>
                            </tr>
                        </table>
                    </div>
                </div>
            ";
        }

    }

    //Função para filtrar dados do formulário e evitar SQL Injection
    function filtrar_entrada($dado){
        $dado = trim($dado); //Remove espaços desnecessários
        $dado = stripslashes($dado); //Remove as barras invertidas
        $dado = htmlspecialchars($dado); //Converte caracteres especiais em entidades HTML

        return($dado);
    }

?>

<?php include "footer.php"; ?>