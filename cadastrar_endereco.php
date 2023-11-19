<?php 
    require "cabecalho.php";
    require "conexao.php";

    if($_SESSION["admin"] == false){
        die("Página acessível apenas a administradores.");
    }
?>
    <div id="divs_dash">
        <form id="cadastrados" method="post" action="inserir_endereco.php">
            <h2 class="h2_dash prod_cad">Cadastrar novo endereço</h2>
            <label for="desc_cad" class="label_cad">Bairro:</label>
            <input type="text" id="desc_cad" class="input_cad" placeholder="Ex: Vila Nova" name="bairro"> 

            <label for="desc_cad" class="label_cad">Rua:</label>
            <input type="text" id="desc_cad" class="input_cad" placeholder="Ex: Rua das Flores" name="rua"> 

            <label for="desc_cad" class="label_cad">Número:</label>
            <input type="text" id="desc_cad" class="input_cad" placeholder="Ex: 123" name="numero"> 

            <button type="submit" class="button_cadastro">Cadastrar</button>
        </form>
    </div>
    <?php require "rodape.php"; ?>