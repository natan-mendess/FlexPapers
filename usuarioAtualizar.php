<?php
    $iduser = $_POST["iduser"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];

    require "valEmail.php";
    valEmail($email);

    require "pass6char.php";
    passchar($senha);

    require "conexao.php";
    require "noinject.php";
    $todos = array($email,$senha,$nome,$sexo,$telefone,$endereco);
    foreach ($todos as $v){
        $v = noinject($v,$conexao);
    }

    if ($sexo !== "Masculino" && $sexo !== "Feminino") {
        die("Gênero inválido.");
    }

    require "campoObrigatorio.php";
    $obrigatorios = array($email,$senha,$nome,$sexo,$endereco);
    foreach ($obrigatorios as $v){
        campoObrigatorio($v);
    }

    $comando = "UPDATE usuarios SET nome='$nome',email='$email',senha='$senha',sexo='$sexo',telefone='$telefone',endereco='$endereco' WHERE iduser=$iduser";

    $resultado = mysqli_query($conexao, $comando);

    if($resultado==true){
        header("Location: pagina_usuarios.php");
    } else{
        die(mysqli_error($conexao));
    }