<?php
    require "conexao.php";
    require "cabecalho.php";

    $id = $_GET["idcat"];

    $comando = "select * from categoria where idcat=$id";
    $resultado = mysqli_query($conexao,$comando);
    $produto = mysqli_fetch_assoc($resultado);
?>

<h1 class="h1_atu">Atualizar produto</h1>

<form action="categoriaAtualizar.php" method="POST" class="prod_atualizar">
    <input type="hidden" name="idcat" value="<?=$produto["idcat"]?>">

    <label class="label-campo" for="titulo">Nome:</label>
    <input class="campo-texto" id="titulo" type="text" name="nome" value="<?=$produto["nome"]?>">

    <br><br>
    <button class="botao-enviar" type="submit">Enviar</button>
</form>

<?php require "rodape.php"; ?>