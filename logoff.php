<?php
    session_start();
    unset($_SESSION["logado"]);
    $_SESSION["admin"] = false;
    header('Location: Index.php');