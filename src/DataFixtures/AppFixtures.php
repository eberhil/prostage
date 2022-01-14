<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Stage;
use App\Entity\Entreprise;
use App\Entity\Formation;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        

  



        ////////////////FORMATIONS/////////////////////////

        $formationDUTInfo = new Formation();
        $formationDUTInfo->setNomCourt("DUT INFO");
        $formationDUTInfo->setNomLong("Diplome Universitaire Technologique Informatique");
        $manager->persist($formationDUTInfo);

        $formationDUTGEA = new Formation();
        $formationDUTGEA->setNomCourt("DUT GEA");
        $formationDUTGEA->setNomLong("Diplome Universitaire Technologique Gestion des Entreprises et des Administrations");
        $manager->persist($formationDUTGEA);

        $formationDUTGIM = new Formation();
        $formationDUTGIM->setNomCourt("DUT GIM");
        $formationDUTGIM->setNomLong("Diplome Universitaire Technologique Génie Industriel et Maintenance");
        $manager->persist($formationDUTGIM);





        ////////////////////STAGES///////////////////////

        // STAGES DUT INFO
        $stageApple = new Stage();
        $stageApple->setTitre("Developpeur");
        $stageApple->setMission("Créer une application web en java");
        $stageApple->setEmail("apple@icloud.com");
        $stageApple->addFormation($formationDUTInfo);
        $manager->persist($stageApple);

        $stageGoogle = new Stage();
        $stageGoogle->setTitre("Developpeur");
        $stageGoogle->setMission("Créer la bd d'un site web en SQL");
        $stageGoogle->setEmail("google@gmail.com");
        $stageGoogle->addFormation($formationDUTInfo);
        $manager->persist($stageGoogle);

        $stageFacebook = new Stage();
        $stageFacebook->setTitre("Administrateur");
        $stageFacebook->setMission("Administrer le réseau et le sécuriser");
        $stageFacebook->setEmail("facebook@yahoo.com");
        $stageFacebook->addFormation($formationDUTInfo);
        $manager->persist($stageFacebook);

        $stageBeReal = new Stage();
        $stageBeReal->setTitre("Developpeur");
        $stageBeReal->setMission("Développer en C-Sharp une application");
        $stageBeReal->setEmail("beReal@yahoo.com");
        $stageBeReal->addFormation($formationDUTInfo);
        $manager->persist($stageBeReal);

        //STAGES DUT GEA
        $stageCA = new Stage();
        $stageCA->setTitre("Banque");
        $stageCA->setMission("Découvrez le métier en banque");
        $stageCA->setEmail("CA@gmail.com");
        $stageCA->addFormation($formationDUTGEA);
        $manager->persist($stageCA);

        $stageBanquePopulaire = new Stage();
        $stageBanquePopulaire->setTitre("Comptabilité");
        $stageBanquePopulaire->setMission("Un stage pour surveiller les comptes clients");
        $stageBanquePopulaire->setEmail("BP@gmail.com");
        $stageBanquePopulaire->addFormation($formationDUTGEA);
        $manager->persist($stageBanquePopulaire);

        $stageArka = new Stage();
        $stageArka->setTitre("Comptabilité");
        $stageArka->setMission("Stage d'initiation à la comptabilité et à la finance chez Arka");
        $stageArka->setEmail("arka@gmail.com");
        $stageArka->addFormation($formationDUTGEA);
        $manager->persist($stageArka);

        //STAGES DUT GIM
        $stageBMW = new Stage();
        $stageBMW->setTitre("Automobile");
        $stageBMW->setMission("Initiation au monde de l'automobile");
        $stageBMW->setEmail("BMW@gmail.com");
        $stageBMW->addFormation($formationDUTGIM);
        $manager->persist($stageBMW);

        $stageAirbus = new Stage();
        $stageAirbus->setTitre("Aviation");
        $stageAirbus->setMission("Découverte de la conception d'avions");
        $stageAirbus->setEmail("airbus@gmail.com");
        $stageAirbus->addFormation($formationDUTGIM);
        $manager->persist($stageAirbus);        


              ////////////////////ENTREPRISES//////////////////

              $Apple = new Entreprise();
              $Apple->setNom("Apple");
              $Apple->setAdresse("11 rue Fétérel");
              $Apple->setActivite("Developpement applications");
              $Apple->setSiteWeb("www.apple.com");
              $Apple->addStage($stageApple);
              $manager->persist($Apple);
      
      
              $Google = new Entreprise();
              $Google->setNom("Google");
              $Google->setAdresse("23 rue du colonel Fabien");
              $Google->setActivite("Sites");
              $Google->setSiteWeb("www.google.com");
              $Google->addStage($stageGoogle);
              $manager->persist($Google);
      
              $Facebook = new Entreprise();
              $Facebook->setNom("Facebook");
              $Facebook->setAdresse("23 rue du colonel Fabien");
              $Facebook->setActivite("Sites");
              $Facebook->setSiteWeb("www.Facebook.com");
              $Facebook->addStage($stageFacebook);
              $manager->persist($Facebook);
      
      
              $BeReal = new Entreprise();
              $BeReal->setNom("BeReal");
              $BeReal->setAdresse("6 rue de la compté");
              $BeReal->setActivite("Applications");
              $BeReal->setSiteWeb("www.BeReal.com");
              $BeReal->addStage($stageBeReal);
              $manager->persist($BeReal);
      
      
              $CA = new Entreprise();
              $CA->setNom("CA");
              $CA->setAdresse("6 rue de la compté");
              $CA->setActivite("Banque");
              $CA->setSiteWeb("www.CA.com");
              $CA->addStage($stageCA);
              $manager->persist($CA);
      
      
              $BanquePopulaire = new Entreprise();
              $BanquePopulaire->setNom("BanquePopulaire");
              $BanquePopulaire->setAdresse("6 rue Minerva");
              $BanquePopulaire->setActivite("Banque");
              $BanquePopulaire->setSiteWeb("www.BP.com");
              $BanquePopulaire->addStage($stageBanquePopulaire);
              $manager->persist($BanquePopulaire);
      
      
              $Arka = new Entreprise();
              $Arka->setNom("Arka");
              $Arka->setAdresse("26 allée du colonel Fabien");
              $Arka->setActivite("Comptabilité");
              $Arka->setSiteWeb("www.Arka.com");
              $Arka->addStage($stageArka);
              $manager->persist($Arka);
      
              
              $BMW = new Entreprise();
              $BMW->setNom("BMW");
              $BMW->setAdresse("20 allée du Près");
              $BMW->setActivite("Automobile");
              $BMW->setSiteWeb("www.BMW.com");
              $BMW->addStage($stageBMW);
              $manager->persist($BMW);
      
      
              $Airbus = new Entreprise();
              $Airbus->setNom("Airbus");
              $Airbus->setAdresse("11 rue Puit");
              $Airbus->setActivite("Aviation");
              $Airbus->setSiteWeb("www.Airbus.com");
              $Airbus->addStage($stageAirbus);
              $manager->persist($Airbus);
      
      
              




        $manager->flush();
    }
}
