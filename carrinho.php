<?php require "cabecalho.php"; ?>
    <h1 class="h1_login">Meu carrinho</h1>
    <div id="divs_carrinho">
        <div id="div_carrinho">
            <div class="carrinho_cabecalho">
                <div class="pcabecalho">produto</div>
                <div class="pcabecalho">quantidade</div>
                <div class="pcabecalho">remover</div>
                <div class="pcabecalho">preço</div>
            </div>
            <hr class="hr_carrinho">
            <div class="carrinhoprod">
                <img src="fotos_produtos/anatomia_musculacao.jpg" alt="anatomia_musculacao" class="imgcarrinho">
                <p class="ptitle">Anatomia da musculação</p>
                <input type="number" class="quantprod">
                <i class="fa-solid fa-trash" style="color: #000000;"></i>
                <p class="pprice">R$ 204,00</p>
            </div>
            <hr class="hr_carrinho">
            <div class="carrinhoprod">
                <img src="fotos_produtos/meditacoes.jpg" alt="anatomia_musculacao" class="imgcarrinho">
                <p class="ptitle">Meditações</p>
                <input type="number" class="quantprod">
                <i class="fa-solid fa-trash" style="color: #000000;"></i>
                <p class="pprice">R$ 36,00</p>
            </div>
            <hr class="hr_carrinho">
            <div class="carrinhoprod">
                <img src="fotos_produtos/1984.jpg" alt="anatomia_musculacao" class="imgcarrinho">
                <p class="ptitle">1984</p>
                <input type="number" class="quantprod">
                <i class="fa-solid fa-trash" style="color: #000000;"></i>
                <p class="pprice">R$ 29,90</p>
            </div>
            <hr class="hr_carrinho">
        </div>

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