<?php 
    require "cabecalho.php";
    require "conexao.php";

    $comandoCat = "SELECT idcat, nome FROM categoria";
    $resultado2 = mysqli_query($conexao, $comandoCat);

    if($_SESSION["admin"] == false){
        die("Página acessível apenas a administradores.");
    }
?>
    <div id="divs_dash">
        <form id="cadastrados" method="post" action="inserir_produto.php" enctype="multipart/form-data">
            <h2 class="h2_dash prod_cad">Cadastrar novo produto</h2>
            <label for="desc_cad" class="label_cad">título:</label>
            <input type="text" id="desc_cad" class="input_cad" placeholder="Ex: Hamlet" name="titulo">
            <label for="prec_cad" class="label_cad">preço:</label>
            <input type="text" id="prec_cad" class="input_cad" placeholder="Ex: 50,00" name="preco">
            <label for="ficha_cad" class="label_cad">descrição:</label>
            <textarea name="descricao" rows="6" cols="50" placeholder="Ex: Descrição, editora, idioma etc." id="ficha_cad" class="input_cad"></textarea>
            <label for="cat_cad" class="label_cad">categoria:</label>
            <select name="categoria" id="cat_cad"  class="input_cad">
            <?php
                while ($categorias = mysqli_fetch_assoc($resultado2)) {
                echo '<option value="' . $categorias["idcat"] . '">' . $categorias["nome"] . '</option>';
                }
            ?>
            </select>
            <label for="up_cad" class="label_cad">upload de imagem do produto:</label>
            <input type="file" id="up_cad" name="foto">
            <label for="tipoCapa" class="label_cad">Tipo de Capa:</label>
            <select id="tipoCapa" name="tipoCapa" class="input_cad">
                <option value="Capa comum">Capa comum</option>
                <option value="Capa dura">Capa dura</option>
                <option value="eBook">eBook</option>
            </select>

            <label for="dataLancamento" class="label_cad">Data de Lançamento:</label>
            <input type="text" id="dataLancamento" name="dataLancamento" class="input_cad" placeholder="Ex: 01 junho 2023">

            <label for="editora" class="label_cad">Editora:</label>
            <input type="text" id="editora" name="editora" class="input_cad" placeholder="Ex: Editora XYZ">

            <label for="idioma" class="label_cad">Idioma:</label>
            <select id="idioma" name="idioma" class="input_cad">
                <option value="Português">Português</option>
                <option value="Inglês">Inglês</option>
                <option value="Espanhol">Espanhol</option>
                <option value="Francês">Francês</option>
                <option value="Alemão">Alemão</option>
                <option value="Italiano">Italiano</option>
                <option value="Russo">Russo</option>
            </select>
            <label for="quantPaginas" class="label_cad">Quantidade de Páginas:</label>
            <input type="number" id="quantPaginas" name="quantPaginas" class="input_cad" placeholder="Ex: 300">

            <label for="dimensoes" class="label_cad">Dimensões:</label>
            <input type="text" id="dimensoes" name="dimensoes" class="input_cad" placeholder="Ex: 24.4 x 17.6 x 1.8 cm">

            <button type="submit" class="button_cadastro">Cadastrar</button>
        </form>
    </div>
    <?php require "rodape.php"; ?>