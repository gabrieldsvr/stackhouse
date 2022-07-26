<?php
use CoffeeCode\Router\Router;

require __DIR__ . "/vendor/autoload.php";
$router = new Router(URL_BASE);
$router->namespace("Source\Controllers");

$router->group(null);
$router->get("/", "WebController:home", "WebController.home");
$router->get("/map", "WebController:map", "WebController.map");
$router->get("/map/{id}", "WebController:map", "WebController.map");
$router->get("/map/jsonMap", "MapController:jsonMap", "MapController.jsonMap");
$router->get("/imovel/{id}", "WebController:imovel", "WebController.imovel");
$router->get("/contato", "WebController:contato", "WebController.contato");
$router->get("/sobre_nos", "WebController:sobre_nos", "WebController.sobre_nos");
$router->get("/teste", "WebController:teste", "WebController.teste");



$router->get("/mail", "MailController:send", "MailController.send");
$router->post("/mail", "MailController:send", "MailController.send");





$router->group("ops");
$router->get("/{errcode}/", "Web:error");

$router->dispatch();
if ($router->error()) {
    $router->redirect("/ops/{$router->error()}/");
}


