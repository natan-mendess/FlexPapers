<?php
session_start();
$idProduto = $_GET["id"];

if(!isset($_SESSION["carrinho"])) { //não existe a sessão!
    $carrinho = [];
} else {    //existe a sessao de carrinho!
    $carrinho = $_SESSION["carrinho"]; //peguei os dados da sessao!
}


$carrinho[] = $idProduto; //adicionando um elemento no vetor

$_SESSION["carrinho"] = $carrinho; //salvando os dados na sessao!
 
header("Location: carrinho.php");