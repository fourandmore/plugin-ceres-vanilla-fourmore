<?php

namespace CeresVanillaFourMore\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresVanillaFourMoreItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresVanillaFourMore::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}