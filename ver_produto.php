    <?php
        require "cabecalho.php";
        require "conexao.php";
        $id = $_GET["idprod"];

        $comando = "SELECT p.*, c.nome AS nome_categoria FROM produtos p INNER JOIN categoria c ON p.categoria = c.idcat WHERE p.idprod = $id";
        $resultado = mysqli_query($conexao,$comando);

        $registro = mysqli_fetch_assoc($resultado);

        $titulo = $registro["titulo"];
        $tipoCapa = $registro["tipoCapa"];
        $dataLancamento = $registro["dataLancamento"];
        $descricao = $registro["descricao"];
        $editora = $registro["editora"];
        $idioma = $registro["idioma"];
        $dimensoes = $registro["dimensoes"];
        $capaComum = $registro["capaComum"];
        $preco = $registro["preco"];
        $categoria = $registro["nome_categoria"];
    ?>
    <!--cabecalho-->
    
        <div id="ver_produto">
            <div id="foto_texto">
                <div id="foto">
                    <img src="<?=$registro["foto"]?>" alt="capa" id="foto1">
                </div>

                <div id="texto">
                    <h2 class="titulo"><?=$titulo?></h2>
                    <h3 class="subtitulo"><?=$tipoCapa?> – <?=$dataLancamento?></h3>
                    <div id="preco_compra">
                        <h1 class="preco">R$ <?= number_format($preco, 2, ',', '.') ?></h1>
                        <a href="adicionarCarrinho.php?id=<?=$id?>" class="botao_compra">COMPRAR</a>
                    </div>
                    <p class="descricao"><?=$descricao?></p>
                </div>
            </div>
            <hr class="hr">
            <div id="detalhes">
                <h1 class="detalhes_cabecalho">Detalhes do produto</h1>
                <p class="detalhes_p"><strong>Editora : </strong><?=$editora?></p>
                <p class="detalhes_p"><strong>Idioma : </strong><?=$idioma?></p>
                <p class="detalhes_p"><strong>Capa comum : </strong><?=$capaComum?> páginas</p>
                <p class="detalhes_p"><strong>Dimensões : </strong><?=$dimensoes?></p>
                <p class="detalhes_p"><strong>Categoria : </strong><?=$categoria?></p>
            </div>

            <hr class="hr">
        </div>

    <script src="ver_produto.js"></script>
    <!--rodape-->
    <?php require "rodape.php"; ?>