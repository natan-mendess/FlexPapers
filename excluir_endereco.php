<?php
require "conexao.php";

$id = $_GET["idend"];
$comando = "DELETE FROM enderecos WHERE idend = $id";

$resultado = mysqli_query($conexao, $comando);

if($resultado == true) {
    header("Location: pagina_enderecos.php");
} else {
    die(mysqli_error($conexao));
}