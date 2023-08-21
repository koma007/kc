<?php

namespace App\DataFixtures;

use App\Entity\ArrangementPrice;
use App\Entity\Polprodukty;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

//xlsx import
use PhpOffice\PhpSpreadsheet\IOFactory;

class AppFixtures extends Fixture
{
    // TODO poprawic na tablice
    public function load(ObjectManager $manager): void
    {
//         $user = new User();
//         $user->setEmail('admin@admin.pl');
//         $user->setPassword('$2y$13$6Q3YPMDZSRldwbr37wQxceoA8D8LMMLfKZptPMx');
//         $user->setRoles(array('ROLE_ADMIN'));
//         $manager->persist($user);
//        $manager->flush();
//
//        $user = new User();
//         $user->setEmail('robol@robol.pl');
//         $user->setPassword('$2y$13$dFXi9QCVs27UZLB8vbA/k.1iP0mzR/C2syKFl6yup38hW.jpmYMse');
//         $user->setRoles(array('ROLE_USER'));
//         $manager->persist($user);
//
//        $manager->flush();


        //RESETOWANIE ID
        $connection = $manager->getConnection();
        $platform = $connection->getDatabasePlatform();
        $connection->executeUpdate('TRUNCATE TABLE polprodukty CASCADE;');
        $connection->executeUpdate($platform->getTruncateTableSQL('polprodukty', true) . ';');
        $connection->executeUpdate('ALTER SEQUENCE polprodukty_id_seq RESTART WITH 1;');


        $polproduktyPrices = new Polprodukty();
        // eported from https://docs.google.com/spreadsheets/d/1D619Vj_XVgAHpORSADftFuBy0n_RLTQUiNQYa4E-elw/edit#gid=0
        $file = 'Cennik.xlsx'; // get the file from the sent request
        $fileFolder = __DIR__ . '/../Files/';  //choose the folder in which the uploaded fi

        $spreadsheet = IOFactory::load($fileFolder . $file); // Here we are able to read from the excel file
        $row = $spreadsheet->getActiveSheet()->removeRow(1); // I added this to be able to remove the first file line
        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true); // here, the read data is turned into an array


        foreach ($sheetData as $Row)
        {

            $name = $Row['A']; // store the first_name on each iteration
            if ($name == null)
                continue;
            $price = $Row['B']; // store the last_name on each iteration
//            if ($price == null)
//                continue;

//            $arrangement_existant = $manager->getRepository(ArrangementPrice::class)->findOneBy(array('name' => $name));
//
//                // make sure that the user does not already exists in your db
//            if (!$arrangement_existant)
//            {
                $polprodukt = new Polprodukty();
                $polprodukt->setNazwa($name);


            $liczba = $price; // Przykładowa liczba wczytana jako string

            $liczbaFloat = floatval($liczba); // Zamiana na float

            if (is_null($liczbaFloat)) {
                $liczbaFloat = 0; // Ustawienie wartości 0 dla null
            }

            $liczbaString = str_replace('.', ',', number_format($liczbaFloat, 2)); // Zamiana kropki na przecinek i formatowanie do dwóch miejsc po przecinku

            $liczbaFloat = floatval($liczba); // Zamiana na float

               // echo gettype($liczbaFloat);
                $polprodukt->setCena($liczbaFloat);
                $manager->persist($polprodukt);

                // here Doctrine checks all the fields of all fetched data and make a transaction to the database.
//            }
            $manager->flush();
        }




    }
}
