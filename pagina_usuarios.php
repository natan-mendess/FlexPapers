<?php 
    require "conexao.php";
    require "cabecalho.php";
    require "validacoes.php";

    $comando = "SELECT u.*, e.bairro FROM Usuarios u INNER JOIN enderecos e ON u.endereco = e.idend";
    $resultado = mysqli_query($conexao, $comando);
    $registros = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    ?>

    <div id="lista_produtos">
        <h1>Lista de Usuários</h1>
        <div class="produtos_pg">
                <?php
                    foreach ($registros as $registro) :
                    $id = $registro["iduser"];
                ?>
            <div class="produto_pg">
                <div class="descricao_pg">
                    <h2><?= $registro["nome"] ?></h2>
                    <p><?= $registro["email"] ?></p>
                    <p><?= $registro["sexo"] ?></p>
                    <p><?= $registro["telefone"] ?></p>
                    <p><?= $registro["bairro"] ?></p>
                </div>
                <a href="editar_usuario.php?iduser=<?=$id?>" class="editar-link">Editar</a>
                <a href="excluir_usuario.php?iduser=<?=$id?>" class="editar-link">Excluir</a>
            </div>
            <?php endforeach ?>
        </div>
                
    </div>

    <?php require "rodape.php"; ?>