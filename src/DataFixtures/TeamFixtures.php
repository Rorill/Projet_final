<?php

namespace App\DataFixtures;

use App\Entity\Teams;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TeamFixtures extends Fixture
{
    public const TEAMS = [
        "Angers",
        "Auxerre",
        "ASSE",
        "Brest",
        "Le Havre",
        "Lens",
        "Lille",
        "Lyon",
        "Marseille",
        "Monaco",
        "Montpellier",
        "Nantes",
        "Nice",
        "PSG",
        "Reims",
        "Rennes",
        "Strasbourg",
        "Toulouse"
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::TEAMS as $team) {
            $newTeam = new Teams();
            $newTeam
            ->setName($team)
            ->setCountry("France")
            ->setCompetition("Ligue 1");
                    $manager->persist($newTeam);


        }


        $manager->flush();
    }
}
