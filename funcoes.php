<?php

function getConexao()
{
    $config = include 'config.php';
    $mysqli = new mysqli($config['DB_HOST'], $config['DB_USER'], $config['DB_PASS'], $config['DB_DATA']);
    if ($mysqli->connect_errno) {
        return null;
    }
    return $mysqli;
}


function form_login($erro = 0)
{
    $msg = "";
    if ($erro != 0) {
        $msg = '<p class="text-danger"><b>Usuário ou senha inválidos!</b></p>';
    }
    echo <<< HTML
    <div class="container">
        <div class="col-sm-offset-4 col-sm-4">
            <form method="post">
                <div class="form-group">
                    <label for="InputUsuario">Usuário</label>
                    <input type="text" name="login" class="form-control" id="InputUsuario" placeholder="Digite seu usuário">
                </div>
                <div class="form-group">
                    <label for="InputSenha">Senha</label>
                    <input type="password" name="senha" class="form-control" id="InputSenha" placeholder="Senha">
                </div>
                $msg
                <p><a href="#">Esqueceu a senha?</a></p>
                <button type="submit" class="btn btn-default">Entrar</button>
            </form>
        </div>
    </div>

HTML;
}
