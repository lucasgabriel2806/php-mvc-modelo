<?php

include 'Controller/PessoaController.php';

// Pegando a url
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/':
        echo "página inicial";
    break;

    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/form/save':
        PessoaController::save();
    break;

    default:
        echo "Erro 404";
    break;
}

// C - processar a requisição do usuario
