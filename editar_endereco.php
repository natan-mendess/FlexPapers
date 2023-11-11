<?php
    require "conexao.php";
    require "cabecalho.php";

    $id = $_GET["idend"];

    $comando = "select * from enderecos where idend=$id";
    $resultado = mysqli_query($conexao,$comando);
    $produto = mysqli_fetch_assoc($resultado);
?>

<h1 class="h1_atu">Atualizar endereço</h1>

<form action="enderecoAtualizar.php" method="POST" class="prod_atualizar">
    <input type="hidden" name="idend" value="<?=$produto["idend"]?>">

    <label class="label-campo" for="bairro">Bairro:</label>
    <input class="campo-texto" id="bairro" type="text" name="bairro" value="<?=$produto["bairro"]?>">

    <label class="label-campo" for="rua">Rua:</label>
    <input class="campo-texto" id="rua" type="text" name="rua" value="<?=$produto["rua"]?>">

    <label class="label-campo" for="numero">Número:</label>
    <input class="campo-texto" id="numero" type="text" name="numero" value="<?=$produto["numero"]?>">

    <br><br>
    <button class="botao-enviar" type="submit">Enviar</button>
</form>

<?php require "rodape.php"; ?>