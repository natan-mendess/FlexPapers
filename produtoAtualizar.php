<?php
    $imagem = $_FILES["foto"];

    $origem = $imagem["tmp_name"];
    $destino = "fotos_produtos/" . $imagem["name"];

    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $categoria = $_POST["categoria"];
    $tipoCapa = $_POST["tipoCapa"];
    $dataLancamento = $_POST["dataLancamento"];
    $editora = $_POST["editora"];
    $idioma = $_POST["idioma"];
    $capaComum = $_POST["capaComum"];
    $dimensoes = $_POST["dimensoes"];
    $idprod = $_POST["idprod"];

    require "campoObrigatorio.php";
    $obrigatorios = array($titulo,$descricao,$preco,$categoria,$idioma,$capaComum,$categoria);
    foreach ($obrigatorios as $v){
        campoObrigatorio($v);
    }
    
    require "valDouble.php";
    valDouble($preco);

    require "valInt.php";
    valInt($capaComum);

    move_uploaded_file($origem,$destino);

    require "conexao.php";
    require "noinject.php";
    $todos = array($titulo,$descricao,$preco,$categoria,$tipoCapa,$dataLancamento,$editora,$idioma,$capaComum,$dimensoes,$categoria);
    foreach ($todos as $v){
        $v = noinject($v,$conexao);
    }

    $comando = "UPDATE produtos SET titulo='$titulo', descricao='$descricao', preco='$preco', tipoCapa='$tipoCapa', dataLancamento='$dataLancamento', editora='$editora', idioma='$idioma', capaComum='$capaComum', dimensoes='$dimensoes', foto='$destino' WHERE idprod=$idprod";

    $resultado = mysqli_query($conexao, $comando);

    if($resultado==true){
        header("Location: pagina_produtos.php");
    } else{
        die(mysqli_error($conexao));
    }