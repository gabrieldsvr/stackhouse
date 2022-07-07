<?php

namespace Source\Controllers;

use League\Plates\Engine;
use yidas\googleMaps\Client;

class WebController
{
    /* @var Engine */
    private $view;

    public function __construct($router)
    {
        $this->view = Engine::create(dirname(__DIR__, 1) . "/views", "php");
        $this->view->addData(["router" => $router]);
    }

    public function home($data):void{
        $imovelcontroller = new ImovelController();

        echo $this->view->render("home", [
            "title" => "home",
            "imoveis" => $imovelcontroller->get(null),
        ]);
    }

    public function map($data):void{
        $imovelcontroller = new ImovelController();

        $values =  [
            "title" => "MAPA",
            "imoveis" => $imovelcontroller->get(null),
            "imovel_focus" =>isset($data['id']) ? json_decode($imovelcontroller->get($data['id'])->data()->imo_json) : null
        ];
        echo $this->view->render("map",$values);
    }
    public function propriedade($data):void{
        $imovelcontroller = new ImovelController();
        $imovel = $imovelcontroller->get($data['id']);
        $imovelJSON = json_decode($imovel->data()->imo_json);
        $imovel_id = $imovel->data()->imovel_id;

        echo $this->view->render("propriedade", [
            "title" => "Detalhes",
            "imovel" =>  $imovelJSON,
            "imovel_id" => $imovel_id
        ]);
    }
    public function contato($data):void{

        echo $this->view->render("contato", [
            "title" => "contato"
        ]);
    }
}