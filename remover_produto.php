<?php
    require "cabecalho.php";
    require "conexao.php";

    $idProduto = $_GET['id'];

    $posicao = array_search($idProduto, $_SESSION["carrinho"]);

    if ($posicao != false || $posicao === 0) {
        unset($_SESSION["carrinho"][$posicao]);
    }

    header("Location: carrinho.php");