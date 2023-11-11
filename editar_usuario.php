<?php
    require "conexao.php";
    require "cabecalho.php";

    $id = $_GET["iduser"];

    $comando = "select * from Usuarios where iduser=$id";
    $resultado = mysqli_query($conexao,$comando);
    $usuario = mysqli_fetch_assoc($resultado);

    $enderecoComando = "SELECT idend, bairro FROM enderecos";
    $enderecos = mysqli_query($conexao, $enderecoComando);
?>

<h1 class="h1_atu">Atualizar usuário</h1>

<form action="usuarioAtualizar.php" method="POST" class="prod_atualizar">
    <input type="hidden" name="iduser" value="<?=$usuario["iduser"]?>">

    <label class="label-campo" for="email">Email:</label>
    <input class="campo-texto" id="email" type="text" name="email" value="<?=$usuario["email"]?>">

    <label class="label-campo" for="senha">Senha:</label>
    <input class="campo-texto" id="senha" type="text" name="senha" value="<?=$usuario["senha"]?>">

    <label class="label-campo" for="nome">Nome:</label>
    <input class="campo-texto" id="nome" type="text" name="nome" value="<?=$usuario["nome"]?>">

    <label for="sexo" class="label-campo">Sexo:</label>
                <div id="sexos">
                    <input type="radio" id="masculino" name="sexo" value="Masculino">
                    <label for="masculino">masculino</label>
                    <input type="radio" id="feminino" name="sexo" value="Feminino">
                    <label for="feminino">feminino</label>
                </div>

    <label for="endereco" class="label-campo">Endereço:</label>
    <select name="endereco" id="endereco">
        <?php
            while ($endereco = mysqli_fetch_assoc($enderecos)): ?>
                <option 
                <?=($endereco["idend"] == $usuario["endereco"])? 'selected' : ''?>
                value="<?= $endereco["idend"] ?>"><?= $endereco["bairro"] ?></option>
            <?php endwhile; ?>
    </select>

    <label class="label-campo" for="telefone">Telefone:</label>
    <input class="campo-texto" id="telefone" type="text" name="telefone" value="<?=$usuario["telefone"]?>">

    <br><br>
    <button class="botao-enviar" type="submit">Enviar</button>
</form>

<?php require "rodape.php"; ?>