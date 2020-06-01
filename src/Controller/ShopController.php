<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ShopController extends AbstractController
{
    /**
     * @Route("/shop", name="shop_show")
     */
    public function show()
    {
        return $this->render('shop/shop.html.twig', [
            'controller_name' => 'ShopController',
        ]);
    }
}
