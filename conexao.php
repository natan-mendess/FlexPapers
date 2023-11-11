<?php
//$conexao = mysqli_connect("sql309.infinityfree.com", "if0_35174533", "jAeXymrzaKrf8", "if0_35174533_flexpapers");
$conexao = mysqli_connect("localhost", "root", "123456789a", "flexpapers");
$cod = mysqli_set_charset($conexao, 'utf8');

    if(!$conexao){
        die("Conexao falhou: " . mysqli_connect_error());
    }