<?php

namespace App\DataFixtures;

use App\Entity\ArrangementPrice;
use App\Entity\FvKody;
use App\Entity\Polprodukty;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

//xlsx import
use PhpOffice\PhpSpreadsheet\IOFactory;

class AppFixtures extends Fixture
{
//bez czyszczenia BD: php bin/console doctrine:fixtures:load --append
//CSV:
//"id","kod","cena"
//1,"Stroik R72","10"
//2,"Stroik T16","11"
//3,"Stroik G79","12"
//4,"Stroik Q38","13"
//5,"Stroik T59","14"
//6,"Stroik Z91","15"
//7,"Stroik E31","16"
//8,"Stroik H44","17"
//9,"Stroik J36","18"
//10,"Stroik W25","19"
//11,"Stroik R29","20"
//12,"Stroik M64","21"
//13,"Stroik M68","22"
//14,"Stroik Z10","23"
//15,"Stroik Y86","24"
//16,"Stroik B56","25"
//17,"Stroik V52","26"
//18,"Stroik C51","27"
//19,"Stroik E33","28"
//20,"Stroik P34","29"
//21,"Stroik D24","30"
//22,"Stroik S35","31"
//23,"Stroik A60","32"
//24,"Stroik U99","33"
//25,"Stroik R28","34"
//26,"Stroik T70","35"
//27,"Stroik R49","36"
//28,"Stroik T30","37"
//29,"Stroik K20","38"
//30,"Stroik D39","39"
//31,"Stroik Q82","40"
//32,"Stroik U14","41"
//33,"Stroik R32","42"
//34,"Stroik W76","43"
//35,"Stroik S18","44"
//36,"Stroik O82","45"
//37,"Stroik G90","46"
//38,"Stroik K80","47"
//39,"Stroik H77","48"
//40,"Stroik F39","49"
//41,"Stroik O17","50"
//42,"Stroik L50","51"
//43,"Stroik G79","52"
//44,"Stroik Q70","53"
//45,"Stroik P58","54"
//46,"Stroik M42","55"
//47,"Stroik E91","56"
//48,"Stroik W46","57"
//49,"Stroik W14","58"
//50,"Stroik I75","59"
//51,"Stroik P37","60"
//52,"Stroik R57","61"
//53,"Stroik T11","62"
//54,"Stroik U39","63"
//55,"Stroik H20","64"
//56,"Stroik E73","65"
//57,"Stroik P87","66"
//58,"Stroik I94","67"
//59,"Stroik X51","68"
//60,"Stroik D26","69"
//61,"Stroik M70","70"
//62,"Stroik C77","71"
//63,"Stroik V62","72"
//64,"Stroik A72","73"
//65,"Stroik W48","74"
//66,"Stroik X11","75"
//67,"Stroik R67","76"
//68,"Stroik W57","77"
//69,"Stroik Z86","78"
//70,"Stroik I26","79"
//71,"Stroik Y81","80"
//72,"Stroik Z25","81"
//73,"Stroik R29","82"
//74,"Stroik T34","83"
//75,"Stroik E43","84"
//76,"Stroik A89","85"
//77,"Stroik X29","86"
//78,"Stroik W35","87"
//79,"Stroik B75","88"
//80,"Stroik K41","89"
//81,"Stroik N21","90"
//82,"Stroik Y93","91"
//83,"Stroik F11","92"
//84,"Stroik W55","93"
//85,"Stroik A40","94"
//86,"Stroik W40","95"
//87,"Stroik I85","96"
//88,"Stroik G58","97"
//89,"Stroik P21","98"
//90,"Stroik I27","99"
//91,"Stroik P40","100"
//92,"Stroik O61","101"
//93,"Stroik E54","102"
//94,"Stroik Q87","103"
//95,"Stroik D86","104"
//96,"Stroik I58","105"
//97,"Stroik M24","106"
//98,"Stroik G64","107"
//99,"Stroik H97","108"
//100,"Stroik D54","109"
//101,"Stroik Y30","110"
//102,"Stroik I67","111"
//103,"Stroik S97","112"
//104,"Stroik S19","113"
//105,"Stroik K75","114"
//106,"Stroik Q87","115"
//107,"Stroik R20","116"
//108,"Stroik P40","117"
//109,"Stroik K35","118"
//110,"Stroik E80","119"
//111,"Stroik M16","120"
//112,"Stroik E41","125"
//113,"Stroik U35","130"
//114,"Stroik D39","135"
//115,"Stroik R14","140"
//116,"Stroik A78","145"
//117,"Stroik Y61","150"
//118,"Stroik A87","155"
//119,"Stroik K57","160"
//120,"Stroik G68","165"
//121,"Stroik K58","170"
//122,"Stroik R98","175"
//123,"Stroik G79","180"
//124,"Stroik L16","185"
//125,"Stroik J84","190"
//126,"Stroik T20","195"
//127,"Stroik E42","200"
//128,"Stroik V41","205"
//129,"Stroik F75","210"
//130,"Stroik D60","215"
//131,"Stroik N78","220"
//132,"Stroik N49","225"
//133,"Stroik E36","230"
//134,"Stroik W66","235"
//135,"Stroik H39","240"
//136,"Stroik V14","245"
//137,"Stroik F43","250"


    public function load(ObjectManager $manager)
    {
        $ceny = [
            ['start' => 10, 'end' => 120, 'step' => 1],
            ['start' => 125, 'end' => 250, 'step' => 5]
        ];

        foreach ($ceny as $cenaRange) {
            for ($cena = $cenaRange['start']; $cena <= $cenaRange['end']; $cena += $cenaRange['step']) {
                $kod = 'Stroik ' . $this->generateRandomLetter() . rand(10, 99); // Random letter and 2 digits
                $fvKody = new FvKody();
                $fvKody->setKod($kod);
                $fvKody->setCena($cena);
                $manager->persist($fvKody);
            }
        }

        $manager->flush();
    }

    private function generateRandomLetter()
    {
        $letters = range('A', 'Z');
        return $letters[array_rand($letters)];
    }



    // TODO poprawic na tablice
//    public function loadOne(ObjectManager $manager): void
//    {
////         $user = new User();
////         $user->setEmail('admin@admin.pl');
////         $user->setPassword('$2y$13$6Q3YPMDZSRldwbr37wQxceoA8D8LMMLfKZptPMx');
////         $user->setRoles(array('ROLE_ADMIN'));
////         $manager->persist($user);
////        $manager->flush();
////
////        $user = new User();
////         $user->setEmail('robol@robol.pl');
////         $user->setPassword('$2y$13$dFXi9QCVs27UZLB8vbA/k.1iP0mzR/C2syKFl6yup38hW.jpmYMse');
////         $user->setRoles(array('ROLE_USER'));
////         $manager->persist($user);
////
////        $manager->flush();
//
//
//        //RESETOWANIE ID
//        $connection = $manager->getConnection();
//        $platform = $connection->getDatabasePlatform();
//        $connection->executeUpdate('TRUNCATE TABLE polprodukty CASCADE;');
//        $connection->executeUpdate($platform->getTruncateTableSQL('polprodukty', true) . ';');
//        $connection->executeUpdate('ALTER SEQUENCE polprodukty_id_seq RESTART WITH 1;');
//
//
//        $polproduktyPrices = new Polprodukty();
//        // eported from https://docs.google.com/spreadsheets/d/1D619Vj_XVgAHpORSADftFuBy0n_RLTQUiNQYa4E-elw/edit#gid=0
//        $file = 'Cennik.xlsx'; // get the file from the sent request
//        $fileFolder = __DIR__ . '/../Files/';  //choose the folder in which the uploaded fi
//
//        $spreadsheet = IOFactory::load($fileFolder . $file); // Here we are able to read from the excel file
//        $row = $spreadsheet->getActiveSheet()->removeRow(1); // I added this to be able to remove the first file line
//        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true); // here, the read data is turned into an array
//
//
//        foreach ($sheetData as $Row)
//        {
//
//            $name = $Row['A']; // store the first_name on each iteration
//            if ($name == null)
//                continue;
//            $price = $Row['B']; // store the last_name on each iteration
////            if ($price == null)
////                continue;
//
////            $arrangement_existant = $manager->getRepository(ArrangementPrice::class)->findOneBy(array('name' => $name));
////
////                // make sure that the user does not already exists in your db
////            if (!$arrangement_existant)
////            {
//                $polprodukt = new Polprodukty();
//                $polprodukt->setNazwa($name);
//
//
//            $liczba = $price; // Przykładowa liczba wczytana jako string
//
//            $liczbaFloat = floatval($liczba); // Zamiana na float
//
//            if (is_null($liczbaFloat)) {
//                $liczbaFloat = 0; // Ustawienie wartości 0 dla null
//            }
//
//            $liczbaString = str_replace('.', ',', number_format($liczbaFloat, 2)); // Zamiana kropki na przecinek i formatowanie do dwóch miejsc po przecinku
//
//            $liczbaFloat = floatval($liczba); // Zamiana na float
//
//               // echo gettype($liczbaFloat);
//                $polprodukt->setCena($liczbaFloat);
//                $manager->persist($polprodukt);
//
//                // here Doctrine checks all the fields of all fetched data and make a transaction to the database.
////            }
//            $manager->flush();
//        }
//
//
//
//
//    }
}
