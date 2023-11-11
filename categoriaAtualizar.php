<?php
    require "conexao.php";
    require "validacoes.php";

    $nome = $_POST["nome"];
    $idcat = $_POST["idcat"];

    $todos = array($nome,$idcat);
    foreach ($todos as $v){
        $v = noinject($v,$conexao);
    }

    campoObrigatorio($nome);

    $comando = "UPDATE categoria SET nome='$nome' WHERE idcat=$idcat";

    $resultado = mysqli_query($conexao, $comando);

    if($resultado==true){
        header("Location: pagina_categorias.php");
    } else{
        die(mysqli_error($conexao));
    }