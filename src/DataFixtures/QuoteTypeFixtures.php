<?php

namespace App\DataFixtures;

use App\Entity\QuoteType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class QuoteTypeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $quoteType = new QuoteType();
        $quoteType->setName('life');
        $manager->persist($quoteType);

        $manager->flush();
    }
}
