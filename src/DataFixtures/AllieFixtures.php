<?php

namespace App\DataFixtures;

use App\Entity\Allie;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AllieFixtures extends Fixture
{
    private const ALLIE_REFERENCE = 'Allie';
    
    public function load(ObjectManager $manager)
    {
        $nomsAllie = [
            
        ];

        foreach ($nomsAllie as $key => $nomAllie) {
            $allie = new Allie();
            $allie->setNom($nomAllie);
            $manager->persist($allie);
            $this->addReference(self::ALLIE_REFERENCE . '_' . $key, $allie);
        }

        $manager->flush();
    }
}