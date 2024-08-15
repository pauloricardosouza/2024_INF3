<?php include "header.php" ?>

<?php
    echo "<h1 class='text-center'>Lista de Produtos do Sistema</h1>";
    $listarProdutos = "SELECT * FROM Produtos"; //Cria a query para buscar Produtos

    include "conexaoBD.php"; //Inclui o arquivo de conexão com o BD
    $res = mysqli_query($conn, $listarProdutos) or die("Erro ao tentar listar Produtos!") . mysqli_error($conn);

    $totalProdutos = mysqli_num_rows($res); //Busca o total de registros retornados pela query

    echo "<div class='alert alert-info text-center'>Há $totalProdutos produtos cadastrados!</div>";

    //Monta a tabela para exibir os registros
    echo "
    <table class='table'>
        <thead class='table-dark'>
            <tr>
                <th>ID</th>
                <th>FOTO</th>
                <th>NOME</th>
                <th>DESCRIÇÃO</th>
                <th>CATEGORIA</th>
                <th>VALOR</th>
                <th>CONDIÇÃO</th>
                <th>DATA DO CADASTRO</th>
                <th>HORA DO CADASTRO</th>
                <th>STATUS</th>
            <tr>
        </thead>
        <tbody>
    ";

    while($registro = mysqli_fetch_assoc($res)){
        //Armazena em variáveis PHP os registros encontrados na tabela
        $idProduto           = $registro["idProduto"];
        $fotoProduto         = $registro["fotoProduto"];
        $nomeProduto         = $registro["nomeProduto"];
        $descricaoProduto    = $registro["descricaoProduto"];
        $categoriaProduto    = $registro["categoriaProduto"];
        $valorProduto        = $registro["valorProduto"];
        $condicaoProduto     = $registro["condicaoProduto"];
        $dataCadastroProduto = $registro["dataCadastroProduto"];
        $horaCadastroProduto = $registro["horaCadastroProduto"];
        $statusProduto       = $registro["statusProduto"];

        //Exibe os registros encontrados
        echo "
            <tr>
                <td>$idProduto</td>
                <td><img src='$fotoProduto' width='100' title='Foto de $nomeProduto'</td>
                <td>$nomeProduto</td>
                <td>$descricaoProduto</td>
                <td>$categoriaProduto</td>
                <td>$valorProduto</td>
                <td>$condicaoProduto</td>
                <td>$dataCadastroProduto</td>
                <td>$horaCadastroProduto</td>
                <td>$statusProduto</td>
            </tr>
        ";
    }
    echo "</tbody>";
echo "</table>";


?>

<?php include "footer.php" ?>