<?php 
    require "cabecalho.php";
    require "conexao.php";

    $comando = "SELECT * FROM categoria";
    $resultado = mysqli_query($conexao, $comando);
    $registros = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

    if($_SESSION["admin"] == false){
        die("Página acessível apenas a administradores.");
    }
    ?>

    <div id="lista_produtos">
        <h1>Lista de Categorias</h1>
        <div class="produtos_pg">
                <?php
                    foreach ($registros as $registro) :
                    $id = $registro["idcat"];
                ?>
            <div class="produto_pg">
                <div class="descricao_pg">
                    <h2><?= $registro["nome"] ?></h2>
                </div>
                <a href="editar_categoria.php?idcat=<?=$id?>" class="editar-link">Editar</a>
                <a href="excluir_categoria.php?idcat=<?=$id?>" class="editar-link">Excluir</a>
            </div>
            <?php endforeach ?>
        </div>
                
    </div>

    <?php require "rodape.php"; ?>