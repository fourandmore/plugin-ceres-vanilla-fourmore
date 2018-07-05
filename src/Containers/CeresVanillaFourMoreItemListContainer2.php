<?php

namespace CeresVanillaFourMore\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresVanillaFourMoreItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresVanillaFourMore::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}