<?php include("header.php"); ?>

    <?php
        include("conexaoBD.php"); //Inclui o arquivo de conexão com o BD
        $listarProdutos = "SELECT * FROM Produtos"; //Query para selecionar tudo da tabela Produtos
        
        //Início do código para FILTRO
        if(isset($_GET["filtroProduto"])){
            $filtroProduto = $_GET["filtroProduto"];
            //echo "<h1>TIPO DO FILTRO: $filtroProduto</h1>";

            if($filtroProduto != "todos"){
                $listarProdutos = $listarProdutos . " WHERE statusProduto LIKE '$filtroProduto' ";
                //echo "<h1>QUERY: $listarProdutos</h1>";
            }
        }
        
        $res = mysqli_query($conn, $listarProdutos) or die("Erro ao tentar listar produtos");
        $totalProdutos = mysqli_num_rows($res); //Retorna o total de registros da tabela
    ?>

    <div class="container text-center mt-3 mb-5">

        <!-- Alerta criado para informar a quantidade de produtos -->
        <div class="alert alert-info text-center" style="width:50%; margin:auto;">
            Há <strong><?php echo $totalProdutos ?></strong> produtos cadastrados em nosso sistema!
        </div>
        <br>

        <!-- Formulário para aplicar filtros aos produtos -->
        <form name="formFiltro" action="index.php" method="GET" style="width:50%; margin:auto;">
            <select class="form-select" name="filtroProduto" required>
                <option value="todos">Visualizar todos os Produtos</option>
                <option value="disponivel">Visualizar apenas Produtos Disponíveis</option>
                <option value="esgotado">Visualizar apenas Produtos Esgotados</option>
            </select><br>
            <button type="submit" class="btn btn-primary" style="float:right">
                Filtrar Produtos
            </button>
        </form>

        <!-- Início da primeira linha da GRID -->
        <div class="row mt-5">
            <?php
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

                    echo "
                        <!-- Início da primeira coluna da GRID -->
                        <div class='col-sm-3'>
                            <!-- Início do Card para exibição do produto-->
                            <div class='card' style='width:100%; height:100%;'>
                                <img class='card-img-top' src='$fotoProduto' alt='Foto de $nomeProduto'>
                                <div class='card-body'>
                                    <h4 class='card-title'>$nomeProduto</h4>
                                    <p class='card-text'>R$ $valorProduto</p>
                                    <a href='#' class='btn btn-primary'>Ver Detalhes</a>
                                </div>
                            </div>
                        </div>
                    ";
                }
            ?>
        </div>

    </div>

<?php include("footer.php"); ?>