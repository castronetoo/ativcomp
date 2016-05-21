<?php

function cabecalho()
{
    echo <<< HTML
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>Mater AtivComp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- pra saber de onde a pessoa está acessando(PC, Celular), tamanho da tela do computador, -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Início</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relatórios <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Alunos Pendentes</a></li>
                        <li><a href="#">Alunos Finalizados</a></li>
                        <li><a href="#">Eventos Cadastrados</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Quadro Geral</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

HTML;
}

function rodape()
{
    echo <<< HTML
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>

HTML;
}
