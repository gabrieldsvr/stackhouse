<?php

namespace Source\Controllers;

use League\Plates\Engine;

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
            "title" => "HOME",
            "imoveis" => $imovelcontroller->get(null),
        ]);
    }

    public function map($data):void{
        $imovelcontroller = new ImovelController();

        $values =  [
            "title" => "MAPA",
            "imoveis" => $imovelcontroller->get(null),
            "imovel_focus" =>isset($data['id']) ? json_decode($imovelcontroller->get($data['id'])->data()->json) : null
        ];
        echo $this->view->render("map",$values);
    }
    public function propriedade($data):void{
        $imovelcontroller = new ImovelController();
        $imovel = $imovelcontroller->get($data['id']);
        $imovelJSON = json_decode($imovel->data()->json);
        $id = $imovel->data()->id;

        echo $this->view->render("propriedade", [
            "title" => "DETALHES",
            "imovel" =>  $imovelJSON,
            "id" => $id
        ]);
    }
    public function contato($data):void{

        echo $this->view->render("contato", [
            "title" => "CONTATO"
        ]);
    }
    public function sobre_nos($data):void{

        echo $this->view->render("sobre_nos", [
            "title" => "SOBRE"
        ]);
    }
}