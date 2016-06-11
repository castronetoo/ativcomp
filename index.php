<?php

require_once 'essen.php';
require_once 'funcoes.php';

session_start();

$erro_login = 0;

if (!empty($_POST['login'])) {

    $user = $_POST['login'];
    $pass = $_POST['senha'];

    $conn = getConexao();
    if ($conn != null) {
        $stmt = $conn->prepare("SELECT * FROM usuario WHERE login = ?");
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $stmt->bind_result($id, $nome, $login, $hash);

        if ($stmt->fetch()) {
            if (password_verify($pass, $hash)) {
                $_SESSION['USER_ID'] = $id;
                $_SESSION['USER_NAME'] = $nome;
                $_SESSION['USER_LOGIN'] = $login;
            } else {
                $erro_login = 1;
            }
        } else {
            $erro_login = 1;
        }
    }
    $conn->close();
}

cabecalho();

form_login($erro_login);

rodape();
