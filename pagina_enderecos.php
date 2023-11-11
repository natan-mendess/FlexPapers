<?php 
    require "cabecalho.php";
    require "conexao.php";

    $comando = "SELECT * FROM enderecos";
    $resultado = mysqli_query($conexao, $comando);
    $registros = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    ?>

    <div id="lista_produtos">
        <h1>Lista de Endereços</h1>
        <div class="produtos_pg">
                <?php
                    foreach ($registros as $registro) :
                    $id = $registro["idend"];
                ?>
            <div class="produto_pg">
                <div class="descricao_pg">
                    <h2><?= $registro["bairro"] ?></h2>
                    <p><?= $registro["rua"] ?></p>
                    <p><?= $registro["numero"] ?></p>
                </div>
                <a href="editar_endereco.php?idend=<?=$id?>" class="editar-link">Editar</a>
                <a href="excluir_endereco.php?idend=<?=$id?>" class="editar-link">Excluir</a>
            </div>
            <?php endforeach ?>
        </div>
                
    </div>

    <?php require "rodape.php"; ?>