<?php
    function campoObrigatorio($campo){
        if (strlen(trim($campo)) == 0) {
            die("Erro, informações obrigatórias não inseridas.");
        }

    }

    function noinject($val, $conexao){
        $val = strip_tags($val);
        $val = mysqli_real_escape_string($conexao, $val);
        $val = trim($val);
        return $val;
    }

    function passchar($campo){
        if (strlen(trim($campo)) < 6) {
            die("Senha inválida, insira uma senha com mais de 5 caracteres.");
        }

    }

    function valDouble($val){
        $val = filter_var($val, FILTER_VALIDATE_FLOAT);
        if($val == FALSE){
            die("Erro, o preço deve ser em formato de número decimal.");
        }
    }

    function valEmail($val){
        $val = filter_var($val, FILTER_VALIDATE_EMAIL);
        if($val == FALSE){
            die("Erro, o email é inválido.");
        }
    }

    function valInt($val){
        $val = filter_var($val, FILTER_VALIDATE_INT);
        if($val == FALSE){
            die("Erro, o quantidade de páginas deve ser um número inteiro.");
        }
    }