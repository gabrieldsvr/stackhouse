<?php
//TESTADO FTP
use CoffeeCode\Router\Router;

require __DIR__ . "/vendor/autoload.php";
$router = new Router(URL_BASE);
$router->namespace("Source\Controllers");

$router->group(null);
$router->get("/", "WebController:home", "WebController.home");
$router->get("/map", "WebController:map", "WebController.map");
$router->get("/map/jsonMap", "MapController:jsonMap", "MapController.jsonMap");
$router->get("/propriedade/{id}", "WebController:propriedade", "WebController.propriedade");
$router->get("/contato", "WebController:contato", "WebController.contato");





$router->group("ops");
$router->get("/{errcode}/", "Web:error");

$router->dispatch();
if ($router->error()) {
    $router->redirect("/ops/{$router->error()}/");
}


