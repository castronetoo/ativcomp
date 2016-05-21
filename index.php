<?php

require_once 'essen.php';
require_once 'funcoes.php';

session_start();

if (!empty($_POST['login'])) {

    $user = $_POST['login'];
    $pass = $_POST['senha'];

    if ($user == "diego" and $pass == "123") {
        echo 'LOGADO';
    }
}

cabecalho();

form_login();

rodape();
