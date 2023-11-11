<?php
require "conexao.php";

$id = $_GET["idprod"];
$comando = "DELETE FROM produtos WHERE idprod = $id";

$resultado = mysqli_query($conexao, $comando);

if($resultado == true) {
    header("Location: pagina_produtos.php");
} else {
    die(mysqli_error($conexao));
}