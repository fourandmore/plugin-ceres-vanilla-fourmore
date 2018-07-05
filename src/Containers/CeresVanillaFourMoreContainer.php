<?php

namespace CeresVanillaFourMore\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresVanillaFourMoreContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresVanillaFourMore::Stylesheet');
    }
}