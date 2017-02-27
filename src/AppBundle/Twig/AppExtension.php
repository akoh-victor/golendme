<?php

namespace AppBundle\Twig;

use Doctrine\ORM\EntityManager;


class AppExtension extends \Twig_Extension
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('price', array($this, 'priceFilter')),
        );
    }

    public function priceFilter($number, $decimals = 0, $decPoint = '.', $thousandsSep = ',')
    {
        $price = number_format($number, $decimals, $decPoint, $thousandsSep);
        $price = 'NGN '.$price;

        return $price;
    }




    public function getName()
    {
        return 'app_extension';
    }
}