<?php include("header.php"); ?>

<?php
    //Verifica se há algum parâmetro chamado "idProduto" sendo recebido por GET
    if(isset($_GET["idProduto"])){
        $idProduto = $_GET["idProduto"];

        //echo "<h1>idProduto Recebido: $idProduto</h1>";

        include("conexaoBD.php");

        $exibirProduto = "SELECT * FROM Produtos WHERE idProduto = $idProduto";
        $res = mysqli_query($conn, $exibirProduto);
        $totalProdutos = mysqli_num_rows($res);

        if($totalProdutos > 0 ){
            echo "<div class='row text-center mb-5'>";

            if($registro = mysqli_fetch_assoc($res)){
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
                    <div class='d-flex justify-content-center mb-3 sm-3'>
                        <div class='card' style='width:30%; border-style:none'>
                            <div id='Produto' class='carousel slide' data-bs-ride='carousel'>

                                <div class='carousel-indicators'>
                                    <button type='button' data-bs-target='#Produto'data-bs-slide-to='0' class='active'></button>
                                    <button type='button' data-bs-target='#Produto'data-bs-slide-to='1'></button>
                                    <button type='button' data-bs-target='#Produto'data-bs-slide-to='2'></button>
                                </div>

                                <div class='carousel-inner'>
                                    <div class='carousel-item active'>
                                        <img src='$fotoProduto' alt='$nomeProduto' class='d-block' style='width: 100%'>
                                    </div>
                                    <div class='carousel-item'>
                                        <img src='$fotoProduto' alt='$nomeProduto' class='d-block' style='width: 100%'>
                                    </div>
                                    <div class='carousel-item'>
                                        <img src='$fotoProduto' alt='$nomeProduto' class='d-block' style='width: 100%'>
                                    </div>
                                </div>

                                <button class='carousel-control-prev' type='button' data-bs-target='#Produto' data-bs-slide='prev'>
                                    <span class='carousel-control-prev-icon'></span>
                                </button>
                                <button class='carousel-control-next' type='button' data-bs-target='#Produto' data-bs-slide='next'>
                                    <span class='carousel-control-next-icon'></span>
                                </button>

                            </div>
                                
                            <div class='card-body'>
                                <h4 class='card-title'><b>$nomeProduto</b></h4>
                                <p class='card-text'>$descricaoProduto</p>
                                <p class='card-text'>Valor: <b>R$ $valorProduto</b></p>
                                <a href='#' title='Comprar $nomeProduto'>
                                    <button class='btn btn-primary'>
                                        Comprar
                                    </button>
                                </a>
                            </div>

                        </div>
                    </div>
                ";
            }
        }
    }
    else{
        die("<div class='alert alert-danger text-center'>Não foi possível carregar informações deste produto!</div>");
    }
?>

<?php include("footer.php"); ?>