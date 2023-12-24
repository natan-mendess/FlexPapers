<?php 
    require "cabecalho.php";
    require "conexao.php";

    $total = 0;
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
                <p class="pprice">R$ <?=number_format($registro["preco"], 2, ',', '.')?></p>
                </div>
                <hr class="hr_carrinho">
            <?php 
            $total = $total + $registro["preco"];
            endforeach 
            ?>
            <a href="limparCarrinho.php" class="limpar">Limpar Carrinho</a>
            </div>
            <hr class="hr_carrinho">

            <div id="div_resumo">
            <h2 class="ptitleresumo">Resumo do pedido</h2>
            <hr class="hr_carrinho2">
            <div id="subtotal">
                <h2 class="ptitleresumo">total</h2>
                <h2 class="ptitleresumo">R$ <?=number_format($total, 2, ',', '.')?></h2>
            </div>
            <a href="finalizar_pedido.php" id="link_finaliza">CONTINUAR</a>
        </div>
            
        </div>
        
    </div>
    <?php require "rodape.php"; ?>