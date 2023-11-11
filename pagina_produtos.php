    <?php 
    require "cabecalho.php";
    require "conexao.php";

    $comando = "SELECT * FROM produtos";
    $resultado = mysqli_query($conexao, $comando);
    $registros = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    ?>

    <div id="lista_produtos">
        <h1>Lista de Produtos</h1>
        <div class="produtos_pg">
                <?php
                    foreach ($registros as $registro) :
                    $id = $registro["idprod"];
                ?>
            <div class="produto_pg">
                <img src="<?=$registro["foto"]?>" alt="Produto" class="img_produto">
                <div class="descricao_pg">
                    <h2><?= $registro["titulo"] ?></h2>
                    <p>R$ <?= $registro["preco"] ?></p>
                </div>
                <a href="editar_produto.php?idprod=<?=$id?>" class="editar-link">Editar</a>
                <a href="excluir_produto.php?idprod=<?=$id?>" class="editar-link">Excluir</a>
            </div>
            <?php endforeach ?>
        </div>
                
    </div>

    <?php require "rodape.php"; ?>