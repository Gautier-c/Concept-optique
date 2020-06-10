<?php

namespace App\Controller;

use App\Entity\Shop;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ShopController extends AbstractController
{
    /**
     * @Route("/magasin/{id}", name="shop_show")
     */
    public function show($id)
    {
        $repo = $this->getDoctrine()->getRepository(Shop::class);

        $shop = $repo->find($id);

        //dd($shop);

        return $this->render('shop/shop.html.twig', [
            'shop'      => $shop,
        ]);
    }
}
