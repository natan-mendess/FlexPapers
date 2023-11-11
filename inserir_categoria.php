<?php
    require "conexao.php";
    require "validacoes.php";

    $nome = $_POST["nome"];

    $nome = noinject($nome,$conexao);
    campoObrigatorio($nome);

    $comando = "insert into categoria (nome) values ('$nome')";

    $resultado = mysqli_query($conexao, $comando);

    if($resultado==true){
        header("Location: pagina_categorias.php");
    } else{
        die(mysqli_error($conexao));
    }