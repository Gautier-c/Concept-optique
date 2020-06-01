<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Shop;

class ShopController extends AbstractController
{
    /**
     * @Route("/shop", name="shop_show")
     */
    public function show()
    {

        $repo = $this->getDoctrine()->getRepository(Shop::class);

        $shops = $repo->findAll();
        //dd($shops);

        return $this->render('shop/shop.html.twig', [
            'shops'      => $shops,
        ]);
    }
}
