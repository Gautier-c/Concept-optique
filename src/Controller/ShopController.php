<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ShopController extends AbstractController
{
    /**
     * @Route("/shop{id}", name="shop_show")
     */
    public function show()
    {
        return $this->render('shop/index.html.twig', [
            'controller_name' => 'ShopController',
        ]);
    }
}
