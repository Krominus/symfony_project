<?php

namespace App\DataFixtures;

use App\Entity\Ennemi;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EnnemiFixtures extends Fixture
{
    private const ENNEMI_REFERENCE = 'Ennemi';
    
    public function load(ObjectManager $manager)
    {
        $nomsEnnemi = [
            "Sukuna",
            "Jogo",
            "Mahito"
        ];

        $nomsPersonnage = [
            "Gojo",
            "Nobara",
            "Nanami"
        ];

        foreach ($nomsEnnemi as $key => $nomEnnemi) {
            $ennemi = new Ennemi();
            $ennemi->setNom($nomEnnemi);
            $manager->persist($ennemi);
            $this->addReference(self::ENNEMI_REFERENCE . '_' . $key, $ennemi);
        }

        $manager->flush();
    }
}