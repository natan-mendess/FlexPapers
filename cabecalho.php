<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <title>Flex Papers</title>
    <link href="index.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/59163de98f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>

<body>
<div id="cabecalho">
        <a href="index.php"><img id="logo_cabecalho" src="logo.svg" alt="logo"></a>
        <form action="index.php" method="get">
            <input type="text" name="busca" id="caixa_pesquisa" placeholder="Pesquisar produtos...">
            <button id="botao_pesquisa" class="botao_cabecalho" type="submit">Pesquisar</button>
        </form>
        <div id="carrinho_conta">
            <a href="carrinho.php">
                <button id="botao_carrinho" class="botao_cabecalho">
                    <i class="fa-sharp fa-solid fa-cart-shopping" style="color: #000000;"></i>Carrinho
                </button>
            </a>
            <a href="login_cadastro.php">
                <button id="botao_conta" class="botao_cabecalho">
                    <i class="fa-solid fa-user" style="color: #000000;"></i>Minha conta
                </button>
            </a>
        </div>
    </div>