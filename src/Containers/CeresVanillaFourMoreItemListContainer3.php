<?php

namespace CeresVanillaFourMore\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresVanillaFourMoreItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresVanillaFourMore::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}