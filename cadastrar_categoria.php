<?php 
    require "cabecalho.php";
    require "conexao.php";

    if($_SESSION["admin"] == false){
        die("Página acessível apenas a administradores.");
    }
?>
    <div id="divs_dash">
        <form id="cadastrados" method="post" action="inserir_categoria.php">
            <h2 class="h2_dash prod_cad">Cadastrar nova categoria</h2>
            <label for="desc_cad" class="label_cad">categoria:</label>
            <input type="text" id="desc_cad" class="input_cad" placeholder="Ex: Poesia" name="nome"> 
            <button type="submit" class="button_cadastro">Cadastrar</button>
        </form>
    </div>
    <?php require "rodape.php"; ?>