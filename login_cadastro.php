<?php 
    require "cabecalho.php"; 
    require "conexao.php";

    $comando = "SELECT idend, bairro FROM enderecos";
    $resultado = mysqli_query($conexao, $comando);

    if(isset($_SESSION["msg"])){ ?>
        <p class="erro_login"><?=$_SESSION["msg"]?></p>
        <?php unset($_SESSION["msg"]);
    }
?>
    <h1 class="h1_login">Login do cliente</h1>
    <div id="divs_login">

        <div id="div_login">
            <h2 class="h2_cliente">Já é cadastrado?</h2>
            <p class="p1_cliente">Então entre com seus dados de login e senha:</p>

            <form id="form_login" method="post" action="logar.php">
                <label for="email1" class="label_login">seu e-mail:</label>
                <input type="email" id="email1" placeholder="Ex: ronniecoleman@gmail.com" name="email">
                <label for="senha1" class="label_login">sua senha:</label>
                <input type="password" id="senha1" name="senha">

                <a href="#" id="forgot">esqueceu sua senha?</a>
                <button id="botao_entrar" type="submit">ENTRAR</button>
                <div id="login_face">
                    <h3 id="h3_login">Entrar com sua conta do Facebook ou Google</h3>
                    <a href="#"><i class="fa-brands fa-google-plus-g fa-2xl" style="color: #000000;"
                            class="logos_redes"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f fa-2xl" style="color: #000000;" class="logos_redes"
                            id="face_logo"></i></a>
                </div>
            </form>
        </div>
        <div id="div_cadastro">
            <h2 class="h2_cliente">Ainda não é cadastrado no site?</h2>
            <p class="p1_cliente">Faça agora mesmo o seu cadastro, é simples e rápido!</p>
            <form id="form_cadastro" method="post" action="inserir_usuario.php">
                <label for="email2" class="label_login">seu e-mail:</label>
                <input type="email" id="email2" placeholder="Ex: kevinlevrone@gmail.com" name="email">
                <label for="senha2" class="label_login">sua senha:</label>
                <input type="password" id="senha2" name="senha">
                <label for="nome" class="label_login">seu nome:</label>
                <input type="text" id="nome" name="nome">

                <label for="sexo" class="label_login">sexo:</label>
                <div id="sexos">
                    <input type="radio" id="masculino" name="sexo" value="Masculino">
                    <label for="masculino">masculino</label>
                    <input type="radio" id="feminino" name="sexo" value="Feminino">
                    <label for="feminino">feminino</label>
                </div>
                <label for="telefone" class="label_login">telefone:</label>
                <input type="tel" id="telefone" name="telefone">

                <label for="endereco" class="label_login">endereço:</label>
                <select name="endereco" id="endereco">
                <?php
                    while ($registro = mysqli_fetch_assoc($resultado)) {
                    echo '<option value="' . $registro["idend"] . '">' . $registro["bairro"] . '</option>';
                    }
                ?>
                </select>

                <button id="botao_cadastro">CADASTRAR</button>
            </form>
        </div>
    </div>
   <?php require "rodape.php"; ?>