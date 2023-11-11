<?php
require "conexao.php";

$id = $_GET["iduser"];
$comando = "DELETE FROM Usuarios WHERE iduser = $id";

$resultado = mysqli_query($conexao, $comando);

if($resultado == true) {
    header("Location: pagina_usuarios.php");
} else {
    die(mysqli_error($conexao));
}