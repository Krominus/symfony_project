<?php

namespace App\DataFixtures;

use App\Entity\Technique;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TechniqueFixtures extends Fixture
{
    private const TECHNIQUE_REFERENCE = 'Technique';
    
    public function load(ObjectManager $manager)
    {
        $nomsTechnique = [
            'Infini',
            'Laceration',
            'Boogie Woogie',
            'Rayon noir'
        ];

        $descriptionsTechnique = [
            
        ];

        foreach ($nomsTechniques as $key => $nomTechnique) {
            $technique = new Technique();
            $technique->setNom($nomTechnique);
            $manager->persist($technique);
            $this->addReference(self::TECHNIQUE_REFERENCE . '_' . $key, $technique);
        }

        $manager->flush();
    }
}