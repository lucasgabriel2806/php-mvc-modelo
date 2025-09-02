<?php

// Pegando a url
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/':
        echo "página inicial";
    break;

    case '/pessoa':
        echo "listagem de pessoas";
    break;

    case '/pessoa/form':
        echo "formulário para salvar pessoa";
    break;

    default:
        echo "Erro 404";
    break;
}