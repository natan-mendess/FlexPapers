<?php 
    require "cabecalho.php";
    require "conexao.php";
?>

    <h1 class="h1_login">Meu carrinho</h1>
    <div id="divs_carrinho">
        <div id="div_carrinho">
            <div class="carrinho_cabecalho">
                <div class="pcabecalho">produto</div>
                <div class="pcabecalho">remover</div>
                <div class="pcabecalho">preço</div>
            </div>
            <hr class="hr_carrinho">
            
                <?php
                    if(empty($_SESSION["carrinho"])) {
                        die("O carrinho está vazio!");
                    }
                    $idsString = "'" . implode("', '", $_SESSION["carrinho"]) . "'";
                    $comando = "SELECT * FROM produtos WHERE idprod IN ($idsString)";
                    $resultado = mysqli_query($conexao, $comando);
                    $registros = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

                    foreach ($registros as $registro) :
                        $id = $registro["idprod"];
                ?>
                <div class="carrinhoprod">
                <hr class="hr_carrinho">
                <img src="<?=$registro["foto"] ?>" alt="foto" class="imgcarrinho">
                <p class="ptitle"><?=$registro["titulo"]?></p>
                <a href="remover_produto.php?id=<?=$id?>" class="remover-link">
                    <i class="fa-solid fa-trash" style="color: #000000;"></i>
                </a>
                <p class="pprice">R$ <?=$registro["preco"]?></p>
                </div>
                <hr class="hr_carrinho">
            <?php endforeach ?>
            </div>
            <hr class="hr_carrinho">
        </div>
        <a href="limparCarrinho.php" class="limpar">Limpar Carrinho</a>

        <div id="div_resumo">
            <h2 class="ptitleresumo">resumo do pedido</h2>
            <div id="subtotal">
                <p class="subtotallabel">Subtotal (3 produtos)</p>
                <p class="subtotallabel">R$ 269,90</p>
            </div>
            <div id="subtotal">
                <p class="subtotallabel">frete</p>
                <p class="subtotallabel">R$ 30,00</p>
            </div>
            <hr class="hr_carrinho2">
            <div id="subtotal">
                <h2 class="ptitleresumo">Total</h2>
                <h2 class="ptitleresumo">R$ 299,90</h2>
            </div>
            <a href="finalizar_pedido.html" id="link_finaliza">CONTINUAR</a>
            <p class="cupomtext">possui cupom ou vale? você poderá usá-los na etapa de pagamento.</p>
        </div>
        
    </div>
    <?php require "rodape.php"; ?>