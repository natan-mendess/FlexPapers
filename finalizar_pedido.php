<?php require "cabecalho.php"; ?>
    <h1 class="h1_login">Meu pedido</h1>
    <div id="divs_pedido">
        <div id="div_pedido">
            <div class="produto_cabecalho">
                <div class="prcabecalho prdesc">descrição do produto</div>
                <div class="prcabecalho prpreco">preço</div>
            </div>
            <hr class="hr_carrinho">
            <div class="proddesc">
                <div class="imgnome">
                    <img src="fotos_produtos/anatomia_musculacao.jpg" alt="anatomia_musculacao" class="imgcarrinho">
                    <p class="ptitle">Anatomia da musculação</p>
                </div>
                <p class="prprice">R$ 204,00</p>
            </div>
            <hr class="hr_carrinho">
            <div class="proddesc">
                <div class="imgnome">
                    <img src="fotos_produtos/meditacoes.jpg" alt="anatomia_musculacao" class="imgcarrinho">
                    <p class="ptitle">Meditações</p>
                </div>
                <p class="prprice">R$ 36,00</p>
            </div>
            <hr class="hr_carrinho">
            <div class="proddesc">
                <div class="imgnome">
                    <img src="fotos_produtos/1984.jpg" alt="anatomia_musculacao" class="imgcarrinho">
                    <p class="ptitle">1984</p>
                </div>
                <p class="prprice">R$ 29,90</p>
            </div>
            <hr class="hr_carrinho">
            <br>
            <div class="prcabecalho prende">endereço de entrega</div>
            <hr class="hr_carrinho">
            <p class="pentrega"><strong>Nome:</strong> Anderson Silva</p>
            <p class="pentrega"><strong>Endereço:</strong> Avenida das Palmeiras, 456</p>
            <p class="pentrega"><strong>Cidade:</strong> Florianópolis</p>
            <p class="pentrega"><strong>Estado:</strong> Santa Catarina</p>
            <p class="pentrega"><strong>CEP:</strong> 88000-000</p>
            <p class="pentrega"><strong>País:</strong> Brasil</p>
            <p></p>
            <a href="#" class="altend">alterar endereço de entrega</a>
            <p class="pdesc">possui cupom de desconto?</p>
            <hr class="hr_carrinho">
            <div id="aplicarcupom">
                <input type="text" placeholder="Insira o cupom aqui" id="textcup">
                <button id="butcup">APLICAR</button>
            </div>
        </div>
        <div id="div_resumos">
            <div id="div_resumo2">
                <h2 class="ptitleresumo">resumo do pedido</h2>
                <div class="subtotal">
                    <p class="subtotallabel">Subtotal (3 produtos)</p>
                    <p class="subtotallabel">R$ 269,90</p>
                </div>
                <div class="subtotal">
                    <p class="subtotallabel">frete</p>
                    <p class="subtotallabel">R$ 30,00</p>
                </div>
                <hr class="hr_carrinho2">
                <div class="subtotal">
                    <h2 class="ptitleresumo">Total</h2>
                    <h2 class="ptitleresumo">R$ 299,90</h2>
                </div>
            </div>
            <div id="frm_pag">
                <h2 class="ptitleresumo">forma de pagamento</h2>
                <form id="frms_pagto">
                <div>
                    <input type="radio" id="boleto"
                    class="radio_pagto" name="forma">
                    <label for="boleto" class="label_pagto">Boleto bancário</label>
                </div>
                <div>
                    <input type="radio" id="credito"
                    class="radio_pagto" name="forma">
                    <label for="credito" class="label_pagto">Cartão de crédito</label>
                </div>
                <div>
                    <input type="radio" id="debito"
                    class="radio_pagto" name="forma">
                    <label for="debito" class="label_pagto">Cartão de débito</label>
                </div>
                    <button id="finalizar_ped">FINALIZAR PEDIDO</button>
                </form>
            </div>
        </div>

    </div>
<?php require "rodape.php"; ?>