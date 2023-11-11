<?php
    require "conexao.php";
    require "validacoes.php";

    $bairro = $_POST["bairro"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];

    noinject($bairro,$conexao);
    noinject($rua,$conexao);
    noinject($numero,$conexao);
    
    $obrigatorios = array($bairro,$rua,$numero);
    foreach ($obrigatorios as $v){
        $v = campoObrigatorio($v);
    }

    $bairro = noinject($bairro,$conexao);
    $rua = noinject($rua,$conexao);
    $numero = noinject($numero,$conexao);

    $comando = "insert into enderecos (bairro,rua,numero) values ('$bairro','$rua','$numero')";

    $resultado = mysqli_query($conexao, $comando);

    if($resultado==true){
        header("Location: pagina_enderecos.php");
    } else{
        die(mysqli_error($conexao));
    }