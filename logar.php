<?php
    session_start();
    require "conexao.php";

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $comando = "SELECT nome,email,senha,administrador FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $resultado = mysqli_query($conexao,$comando);
    $usuario = mysqli_fetch_assoc($resultado);

    if($usuario != NULL){
        //deu certo
        $_SESSION["logado"] = $email;

        if($usuario["administrador"] == 1){
            $_SESSION["admin"]=true;
        }else{
            $_SESSION["admin"]=false;
        }

        header('Location: index.php');
    }else{
        //errado
        $_SESSION["msg"] = "Usuário ou senha inválidos!";
        header("Location: login_cadastro.php");
    }

    