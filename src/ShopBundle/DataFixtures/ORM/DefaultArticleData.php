<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 02.05.2017
 * Time: 12:46
 */

namespace ShopBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ShopBundle\Entity\Shop;

class DefaultArticleData implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $shop = new Shop();
        $shop->setName("name5");
        $shop->setCategory("category5");
        $manager->persist($shop);
        $manager->flush();
    }
}