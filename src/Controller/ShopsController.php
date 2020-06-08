<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Shop;

class ShopsController extends AbstractController
{
    /**
     * @Route("/magasins", name="shops_show")
     */
    public function show()
    {

        $repo = $this->getDoctrine()->getRepository(Shop::class);

        $shops = $repo->findAll();

        return $this->render('shops/shops.html.twig', [
            'shops'      => $shops,
        ]);
    }
}
