<?php

namespace Source\Controllers;

use stdClass;

class MapController
{
    public function jsonMap($data){
        $imovelcontroller = new ImovelController();
        $imoveis = $imovelcontroller->get(null);
        $jsonImoveis = array();
        foreach ($imoveis as $imovel){
            $json = new stdClass();
            foreach ($imovel->data() as $key => $value){
                $json->$key = $value;
            }
                array_push($jsonImoveis,$json);
        }
        echo json_encode($jsonImoveis);
    }



}