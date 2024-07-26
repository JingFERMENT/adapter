<?php

require_once './OC/SuccessCoin.php';
require_once __DIR__. '/../CryptoCurrency.php';

// @TODO 1: Inclure et implémenter l'interface CryptoCurrency
class SuccessCoinAdapter implements CryptoCurrency
{
    private $coin;

    public function __construct()
    {
        // @TODO 2 : Inclure la classe SuccessCoin
        $this->coin = new SuccessCoin();
    }

    public function getName() : string
    {
        // @TODO 3 : Récupérer le nom de la crypto monnaie à partir de la classe d'OpenClassrooms ?
        return SuccessCoin::NAME;
    
    }

    public function getPrice() : string
    {
        // @TODO 4 : Convertir dans le bon format
        $priceInDollars = $this->coin->getValue();
        $priceInEuros = $priceInDollars * 1.2;

        return $priceInEuros . ' €';

    }
}