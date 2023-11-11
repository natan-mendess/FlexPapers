<?php
    require "conexao.php";
    require "validacoes.php";

    $bairro = $_POST["bairro"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $idend = $_POST["idend"];

    $todos = array($bairro,$rua,$numero,$idend);
    foreach ($todos as $v){
        noinject($v,$conexao);
    }

    $obrigatorios = array($bairro,$rua,$numero);
    foreach ($obrigatorios as $v){
        $v = campoObrigatorio($v);
    }

    $comando = "UPDATE enderecos SET bairro='$bairro',rua='$rua',numero='$numero' WHERE idend=$idend";

    $resultado = mysqli_query($conexao, $comando);

    if($resultado==true){
        header("Location: pagina_enderecos.php");
    } else{
        die(mysqli_error($conexao));
    }