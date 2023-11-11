<?php
require "conexao.php";

$id = $_GET["idcat"];
$comando = "DELETE FROM categoria WHERE idcat = $id";

$resultado = mysqli_query($conexao, $comando);

if($resultado == true) {
    header("Location: pagina_categorias.php");
} else {
    die(mysqli_error($conexao));
}