<?php

namespace ShopBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShopController extends Controller
{
    public function homepageAction(){

        $em = $this->getDoctrine();
        $shopRepository = $em->getRepository("ShopBundle:Shop");

        $shops = $shopRepository->findAll();


        return $this->render("::base.html.twig", [
            'shops' => $shops
        ]);

        return $this->render("::base.html.twig");
    }

    public function shopViewAction($name){

        $em = $this->getDoctrine();
        $shopRepository = $em->getRepository("ShopBundle:Shop");

        $shop = $shopRepository->findOneBy(['name' => $name]);


        return $this->render("ShopBundle:Shop:view.html.twig", [
            'shop' => $shop
        ]);
    }


    public function categoryAction($category){
        $em = $this->getDoctrine();
        $shopRepository = $em->getRepository("ShopBundle:Shop");
        $shops = $shopRepository->findBy(['category' => $category]);

        return $this->render("ShopBundle:Shop:category.html.twig", [
            'shops' => $shops,
            'category' => $category
        ]);
    }
}