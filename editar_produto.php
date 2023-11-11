<?php
    require "conexao.php";
    require "cabecalho.php";

    $id = $_GET["idprod"];

    $comando = "select * from produtos where idprod=$id";
    $resultado = mysqli_query($conexao,$comando);
    $produto = mysqli_fetch_assoc($resultado);

    $comandoCat = "SELECT idcat, nome FROM categoria";
    $resultado2 = mysqli_query($conexao, $comandoCat);
?>

<h1 class="h1_atu">Atualizar produto</h1>

<form action="produtoAtualizar.php" method="POST" enctype="multipart/form-data" class="prod_atualizar">
    <input type="hidden" name="idprod" value="<?=$produto["idprod"]?>">

    <label class="label-campo" for="titulo">Título:</label>
    <input class="campo-texto" id="titulo" type="text" name="titulo" value="<?=$produto["titulo"]?>">

    <label class="label-campo" for="descricao">Descrição:</label>
    <input class="campo-texto" id="descricao" type="text" name="descricao" value="<?=$produto["descricao"]?>">

    <label class="label-campo" for="preco">Preço:</label>
    <input class="campo-texto" id="preco" name="preco" type="text" value="<?=$produto["preco"]?>">

    <label class="label-campo" for="tipoCapa">Tipo capa:</label>
    <input class="campo-texto" id="tipoCapa" name="tipoCapa" type="text" value="<?=$produto["tipoCapa"]?>">

    <label class="label-campo" for="dataLancamento">Data de lançamento:</label>
    <input class="campo-texto" id="dataLancamento" name="dataLancamento" type="text" value="<?=$produto["dataLancamento"]?>">

    <label class="label-campo" for="editora">Editora:</label>
    <input class="campo-texto" id="editora" name="editora" type="text" value="<?=$produto["editora"]?>">

    <label class="label-campo" for="idioma">Idioma:</label>
    <input class="campo-texto" id="idioma" name="idioma" type="text" value="<?=$produto["idioma"]?>">

    <label class="label-campo" for="capaComum">Capa comum:</label>
    <input class="campo-texto" id="capaComum" name="capaComum" type="text" value="<?=$produto["capaComum"]?>">

    <label class="label-campo" for="dimensoes">Dimensões:</label>
    <input class="campo-texto" id="dimensoes" name="dimensoes" type="text" value="<?=$produto["dimensoes"]?>">

    <label class="label-campo" for="foto">Foto:</label>
    <input class="campo-arquivo" type="file" id="foto" name="foto">

    <label class="label-campo" for="input_cad">Categoria:</label>
    <select name="categoria" class="input_cad" name="categoria">
    <?php
        while ($categorias = mysqli_fetch_assoc($resultado2)): ?>
            <option 
            <?=($categorias["idcat"] == $produto["categoria"])? 'selected' : ''?>
            value="<?= $categorias["idcat"] ?>"><?= $categorias["nome"] ?></option>
        <?php endwhile; ?>
    </select>
    <br><br>
    <button class="botao-enviar" type="submit">Enviar</button>
</form>

<?php require "rodape.php"; ?>