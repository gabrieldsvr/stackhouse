<?php

define("ROOT", getenv("ROOT"));
define("URL_BASE", getenv("URL_BASE"));

const SITE = "STACK HOUSES";


//Server settings
const MAIL = [
    "host" => "smtp.hostinger.com.br",
    "port" => "587",
    "username" => "contato@gabrielawagner.com",
    "passwd" => "31310801gG",
    "from_name" => "Gabriela",
    "from_email" => "contato@gabrielawagner.com",
    "email_recebimento" => "gabrieldossantosvargas@gmail.com",
];


define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => getenv("DB_HOST"),
    "port" => getenv("DB_PORT"),
    "dbname" => getenv("DB_NAME"),
    "username" => getenv("DB_USER"),
    "passwd" => getenv("DB_PASS"),
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);


function url(string $uri = null): string
{
    if ($uri) {
        return ROOT . "/{$uri}";
    }
    return ROOT;
}

function url_pesquisa(string $uri = null): string
{
    if ($uri) {
        return URL_BASE . "/{$uri}";
    }
    return URL_BASE;
}

function message(string $message, string $type): string
{
    return "<div class='message {$type}'>{$message}</div>";
}
