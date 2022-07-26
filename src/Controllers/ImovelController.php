<?php

namespace Source\Controllers;


use Source\Models\ImovelDAO;

class ImovelController
{

    public function get($data)
    {
        $ImovelDAO = new ImovelDAO();
        if ($data == null) {

            return $ImovelDAO->find()->fetch(true);
        } else {
            return $ImovelDAO->findById(intval($data));
        }
    }

    public function getBySlug($data)
    {
        $ImovelDAO = new ImovelDAO();
        return $ImovelDAO->find("slug = :slug", "slug=".$data)->fetch();

    }


    public function getAPI($data)
    {
        $result = file_get_contents('https://backend.adminsystem.com.br/api/imoveis/182e741f-40b2-3908-bf58-530a8e272885');
        return json_decode($result)->data;
    }


    public function listCardsDestaque($data)
    {
        $lista = "";
        foreach ($data as $imovel) {
            $lista .= $this->criaCardDestaque($imovel);
        }
        return $lista;
    }

    private function criaCardDestaque($data)
    {

        $imovelJson = $data->json;

        if (!isset($imovelJson->valor) || $imovelJson->valor == "") {
            $imovelJson->valor = "A consultar";
        } else {
            $imovelJson->valor = "R$ " . $imovelJson->valor;
        }
        $url = $data->id;
        if (isset($data->slug) && strlen($data->slug) > 0){
            $url = $data->slug;
        }

        return "<div class='col-lg-4 col-md-6 my-3'>
                <div class='card shadow-40'>
                    <a href='" . url_pesquisa('propriedade/' . $url) . "'>
                    <img class='card-img-top' src='{$imovelJson->imagem_destaque}' style='max-height: 200px;'
                                      alt='Card Image'></a>
                    <div class='card-body'>
                        <p class='small'>{$imovelJson->rua}, {$imovelJson->numero} {$imovelJson->bairro}<br> {$imovelJson->cidade}, {$imovelJson->estado}<br></p>
                        <h5 class='card-title mb-2'>
                        {$imovelJson->valor}
                        </h5>
                        <p>{$imovelJson->caracteristicas->area}m² - {$imovelJson->caracteristicas->cama} Quartos {$imovelJson->caracteristicas->banheiro} Banheiros {$imovelJson->caracteristicas->garagem} Vagas</p>
                        <a href='" . url_pesquisa('propriedade/'.$url) . "' class='btn btn-primary float-end'><span class='btn-text'>Detalhes</span></a>
                    </div>
                </div>
            </div>";
    }


}