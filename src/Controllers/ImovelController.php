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
        }else{
            return $ImovelDAO->findById(intval($data));
        }
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
        $imovelJson = json_decode($data->imo_json);
        if (!isset($imovelJson->valor) || $imovelJson->valor == ""){
            $imovelJson->valor = "A consultar";
        }else{
            $imovelJson->valor = "R$ ".$imovelJson->valor;
        }

        return "<div class='col-lg-4 col-md-6 my-3'>
                <div class='card shadow-40'>
                    <a href='" . url_pesquisa('propriedade/' . $data->imovel_id) . "'>
                    <img class='card-img-top' src='{$imovelJson->imagem_destaque}' style='max-height: 200px;'
                                      alt='Card Image'></a>
                    <div class='card-body'>
                        <p class='small'>{$imovelJson->rua}, {$imovelJson->numero} {$imovelJson->bairro}<br> {$imovelJson->cidade}, {$imovelJson->estado}<br></p>
                        <h5 class='card-title mb-2'>
                        {$imovelJson->valor}
                        </h5>
                        <p>{$imovelJson->caracteristicas->area}m² {$imovelJson->caracteristicas->cama} Quartos {$imovelJson->caracteristicas->banheiro} Banheiros {$imovelJson->caracteristicas->garagem} Vargas</p>
                        <a href='" . url_pesquisa('propriedade/' . $data->imovel_id) . "' class='btn btn-primary float-end'><span class='btn-text'>Detalhes</span></a>
                    </div>
                </div>
            </div>";
    }


}