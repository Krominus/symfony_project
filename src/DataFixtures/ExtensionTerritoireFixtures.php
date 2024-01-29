<?php

namespace App\DataFixtures;

use App\Entity\ExtensionTerritoire;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ExtensionTerritoireFixtures extends Fixture
{
    private const EXTENSIONTERRITOIRE_REFERENCE = 'ExtensionTerritoire';
    
    public function load(ObjectManager $manager)
    {
        $nomsExtension = [
            "Autel Démoniaque",
            "Sphère de l'Espace Infini",
            "Orbe d'Isolement"
        ];

        $descriptionsExtension = [
            "Lacère continuellement toutes les personnes dans le territoire",
            "Envoie une quantité de donnée infini au cerveau de toutes les personnes prisent dans l'extension, ce qui a pour effet de les paralyser",
            "Permet de frapper à distance directement l'âme de la personne prise au piège"
        ];

        foreach ($nomsExtension as $key => $nomExtension) {
            $extension = new ExtentionTerritoire();
            $extension->setNom($nomExtension);
            $manager->persist($extension);
            $this->addReference(self::EXTENSIONTERRITOIRE_REFERENCE . '_' . $key, $extension);
        }

        $manager->flush();
    }
}