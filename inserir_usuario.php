<?php
    require "conexao.php";
    require "validacoes.php";
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];

    $corpoEmail = '<html><head><title>Cadastro FlexPapers</title></head><body><p>Parabéns, você concluiu seu cadastro no site FlexPapers. Agora você faz parte da nossa comunidade!</p><p>Aproveite para explorar nossa loja e descobrir as últimas novidades em produtos.</p><p>Boas compras!</p><style>body {font-family: Arial, sans-serif;background-color: #f4f4f4;color: #333;}p {font-size: 16px;line-height: 1.6;margin-bottom: 16px;}</style></body></html>';

    valEmail($email);

    passchar($senha);

    $todos = array($email,$senha,$nome,$sexo,$telefone,$endereco);
    foreach ($todos as $v){
        $v = noinject($v,$conexao);
    }

    if ($sexo !== "Masculino" && $sexo !== "Feminino") {
        die("Gênero inválido.");
    }

    $obrigatorios = array($email,$senha,$nome,$sexo,$endereco);
    foreach ($obrigatorios as $v){
        campoObrigatorio($v);
    }

    $comando = "insert into Usuarios (email,senha,nome,sexo,telefone, endereco) values ('$email','$senha','$nome','$sexo','$telefone','$endereco')";

    $resultado = mysqli_query($conexao, $comando);

    if($resultado==true){
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'flexpapers08@gmail.com';
        $mail->Password = 'kmyp dfcx euaa jkpl';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('flexpapers08@gmail.com');
        $mail->SMTPAuth = true;
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Cadastro FlexPapers';
        $mail->Body = $corpoEmail;
        $mail->send();

        header("Location: pagina_usuarios.php");
    } else{
        die(mysqli_error($conexao));
    }