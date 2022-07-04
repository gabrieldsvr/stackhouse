<?php
namespace Source\Models;
use CoffeeCode\DataLayer\DataLayer;


class ImovelDAO extends DataLayer
{
    public function __construct()
    {
        parent::__construct("imovel", ["imo_json"], "imovel_id", false);
    }
}