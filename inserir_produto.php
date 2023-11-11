<?php
    require "conexao.php";
    require "validacoes.php";

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
    $capaComum = $_POST["quantPaginas"];
    $dimensoes = $_POST["dimensoes"];
    $categoria = $_POST["categoria"];

    $obrigatorios = array($titulo,$descricao,$preco,$categoria,$idioma,$capaComum,$categoria);
    foreach ($obrigatorios as $v){
        campoObrigatorio($v);
    }

    valInt($capaComum);
    
    valDouble($preco);

    $todos = array($titulo,$descricao,$preco,$categoria,$tipoCapa,$dataLancamento,$editora,$idioma,$capaComum,$dimensoes,$categoria);
    foreach ($todos as $v){
        $v = noinject($v,$conexao);
    }
    
    move_uploaded_file($origem,$destino);

    $comando = "insert into produtos (titulo,descricao,preco,tipoCapa,dataLancamento,editora,idioma,capaComum,dimensoes,foto,categoria) values ('$titulo','$descricao','$preco','$tipoCapa','$dataLancamento','$editora','$idioma','$capaComum','$dimensoes','$destino','$categoria')";

    $resultado = mysqli_query($conexao, $comando);

    if($resultado==true){
        header("Location: index.php");
    } else{
        die(mysqli_error($conexao));
    }