<?php

namespace App\DataFixtures;

use App\Entity\Author;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AuthorFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $author = new Author();
        $author->setName('Omar Khayyam');
        $manager->persist($author);

        $manager->flush();
    }
}
