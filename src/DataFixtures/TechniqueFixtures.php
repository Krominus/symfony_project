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
            'Lacération',
            'Boogie Woogie',
            'Rayon noir'
        ];

        $descriptionsTechnique = [
            "Crée une zone d'infini autour de l'utilisateur",
            "Lacère un adversaire à distance",
            "Interverti l'emplacement de l'utilisateur avec un autre personnage lorsqu'il tape dans ses mains",
            "Crée un rayon d'énergie lors d'un coup de poing"
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