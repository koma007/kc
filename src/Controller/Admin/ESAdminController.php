<?php

namespace App\Controller\Admin;

use App\Entity\Polprodukty;
use App\Entity\Wyceny;
use App\Repository\GrupyRepository;
use App\Repository\PolproduktyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ESAdminController extends AbstractController
{

    private $polproduktyRepository;
    private $grupyRepository;

    public function __construct(EntityManagerInterface $entityManager, PolproduktyRepository $polproduktyRepository, GrupyRepository $grupyRepository)
    {
        $this->entityManager = $entityManager;
        $this->polproduktyRepository = $polproduktyRepository;
        $this->grupyRepository = $grupyRepository;


    }


    #[Route('/es', name: 'app_es')]
    public function index(){



//        ###> google/apiclient ###
//        GOOGLE_API_KEY=b50ad05a39b24b69889c89d0615e97d7089d9955
//GOOGLE_CLIENT_ID=115003598454145599574
//GOOGLE_CLIENT_SECRET=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
//GOOGLE_AUTH_CONFIG=%kernel.project_dir%/tmp/credentials2.json

//                $client->setClientId(getenv('GOOGLE_CLIENT_ID'));
//        $client->setClientSecret(getenv('GOOGLE_CLIENT_SECRET'));
//        $client->setAccessToken([
//            'access_token' => getenv('GOOGLE_ACCESS_TOKEN'),
//            'refresh_token' => getenv('GOOGLE_REFRESH_TOKEN'),
//            'expires_in' => 3600,
//        ]);


###< google/apiclient ###

        $client = new \Google_Client();
        $client->setApplicationName('Google Sheets API');
        $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
        $client->setAccessType('offline');
        $path = $this->getParameter('kernel.project_dir') . '/tmp/credentials4.json';
        $client->setAuthConfig($path);

// configure the Sheets Service
        $service = new \Google_Service_Sheets($client);
//        https://www.nidup.io/blog/manipulate-google-sheets-in-php-with-api

        $spreadsheetId = '1h6cBpBCOE9aQLO-REsaSwfwesBeJH2Fpi0TBbJ7GGY4';
        //$spreadsheet = $service->spreadsheets->get($spreadsheetId);
        //dd($spreadsheet);

        //NAZWY ARKUSZÓW
       // $spreadsheet = $service->spreadsheets->get($spreadsheetId);
//dd($spreadsheet);

// NAZWY ARKUSZÓW
//        $response = $service->spreadsheets->get($spreadsheetId);
//        $allSheets = $response->getSheets();
//        $totalSheets = count($allSheets);
//
//        for ($index = 1; $index < ($totalSheets - 1); $index++) {
//            $s = $allSheets[$index];
//            $sheets[] = $s['properties']['title']; // Zachowanie oryginalnych tytułów
//        }

       // dd($sheets);

//        array:132 [▼
//  0 => "WAZON SYLWIA   MIECZ"
//  1 => "ROMA"
//  2 => "KRZYZ"
//  3 => "JULITA  PIANKA"
//  4 => "SMERFETKA PIANKA"
//  5 => "TOCZEK  PIANKA"
//  6 => "MALIBU  PIANKA"
//  7 => "JANKA"
//  8 => "KWADRATW KWADRACIE"
//  9 => "bukiet zwis"
//  10 => "TYTANIK PIANKA"
//  11 => "MARIKA PIANKA"
//  12 => "KOSZ KOMINEK"
//  13 => "2 KWADRATY"
//  14 => "SERCE GÓRALKA"
//  15 => "MAŁA DIANA"
//  16 => "MALINKA"
//  17 => "CUDENKO CZOSNEK"
//  18 => "CUD"
//  19 => "LAMPION DIANA D"
//  20 => "GWIAZDA LAMPION"
//  21 => "fifi"
//  22 => "SERCE BRZOZA  JOLA"
//  23 => "SERCE SZPIC 2"
//  24 => "MARGARET"
//  25 => "KALLAJULKA"
//  26 => "KALLA MARTA"
//  27 => "MYSŁOWIANKA"
//  28 => "BUKIETSTORCZYK  KKK"
//  29 => "CELA "
//  30 => "LOLA HORTENSIA"
//  31 => "POLA"
//  32 => "SERCE SZPIC"
//  33 => "PEDRODANIEL"
//  34 => "MIECZYK DANIEL"
//  35 => "SERCE KOLOS"
//  36 => "LAMPIN WYSOKI"
//  37 => "lampion serce"
//  38 => "złote słoneczniki"
//  39 => "SERCE GIPS D"
//  40 => "SERCE GIPS"
//  41 => "SŁONECZNIK JULEK"
//  42 => " SŁONECZNIK  AGI"
//  43 => "JUKA PUDEŁKO"
//  44 => "SŁONECZKO PIANKA"
//  45 => "KOLCZASTY  PIANKA"
//  46 => "KOŁO TY"
//  47 => "KOŁO LILIA"
//  48 => "MYSZKA PIWONIA"
//  49 => "PASEK KRATKA"
//  50 => "MATA FASZYNA"
//  51 => "SERCE NALKESNIK"
//  52 => "JEZ KOSZ"
//  53 => "ZAGIEL"
//  54 => "PUDRŁKO  RENIA"
//  55 => "PUDEŁKO OSTRÓZKA"
//  56 => "róg brzoza"
//  57 => "KOSZ BIAŁY SYL"
//  58 => "SERCE PUCHAR JOL"
//  59 => "SERCEBRZOZA SRE"
//  60 => "SERCE BRZOZA GORAL"
//  61 => "SERCE KORA"
//  62 => "MINI SKRZYDŁO"
//  63 => "KOSZ PATYK"
//  64 => "may"
//  65 => "SERCE PALMA"
//  66 => "SKRZYDŁA "
//  67 => "PRZETAK D"
//  68 => "PRZETAK MAŁY"
//  69 => "DAMA GIGANT"
//  70 => "SERCE FASZYNA"
//  71 => "3  PPP"
//  72 => "KOSZYK  RENIA"
//  73 => "ALEKSANDRA"
//  74 => "SERCE OGONEK"
//  75 => "KOSZYK KORA ALA"
//  76 => "KOSZYCZEK LODKA"
//  77 => "TACKA"
//  78 => "SERCE GOSIA"
//  79 => "SERCE PEŁNE R"
//  80 => "MINI SERDUSZKO A"
//  81 => "AMARYLIS PAŁKA"
//  82 => "BUKIET MALWA"
//  83 => "BABY AGA"
//  84 => "HUGO "
//  85 => "BENIA LASKA"
//  86 => "KOŁO FASZYNA AGA"
//  87 => "MALUCH STORCZYK"
//  88 => "KALLA OLENKA"
//  89 => "KAKTUS  GOSIA"
//  90 => "WIOSNA BENIA"
//  91 => "PUCHAR HIACYNT A"
//  92 => "PUCHAR LEZACY PIANKA"
//  93 => "PALMA"
//  94 => "ZAJAC AZUR"
//  95 => "NALESNIK"
//  96 => "ZAJAC WUCZYKIJ"
//  97 => "KOGUT MUSZELKA"
//  98 => "KOGUT AZUR"
//  99 => "OWIECZKA"
//  100 => "puchar krokus"
//  101 => "HIACYNT  Ł"
//  102 => "PUCHAR TULIPAN"
//  103 => "ELZA   DIANA"
//  104 => "HANIA  HORTENSIA"
//  105 => "DESKA MA LA NOWA"
//  106 => "RAMONA KALLA PIANKA"
//  107 => "MARYNIA KALLA PIANK"
//  108 => "TULIPAMN KATARZYN7"
//  109 => "KOSZ GNIAZDO"
//  110 => "KORCIA RÓZA"
//  111 => "KRATKA MAŁA"
//  112 => "MUSZELKA TULIPAN"
//  113 => "JAPONIA   ZOFIA"
//  114 => "TOLA TULIPAN"
//  115 => "LILIA WODNA"
//  116 => "NEMO"
//  117 => "GOSA KALLA"
//  118 => "MAILO MIECZ"
//  119 => "MONIKA MIECZ"
//  120 => "TULIPAN LEŻĄCY"
//  121 => "KAKTUS"
//  122 => " BRYGIDA"
//  123 => "MIECIA"
//  124 => "LUDMIŁA"
//  125 => "LILIA MALUCH"
//  126 => "FOKUS RÓZA"
//  127 => "MACZUGA"
//  128 => "KALINA"
//  129 => "ELIZA KALLA"
//  130 => "CZOSNEK"
//  131 => "miranda miecz"
//]


        $sheets = [
  //          "WAZON SYLWIA   MIECZ",
//            "ROMA",
//            "KRZYZ",
//            "JULITA  PIANKA",
//            "SMERFETKA PIANKA",
//            "TOCZEK  PIANKA",
//            "MALIBU  PIANKA",
//            "JANKA",
//            "KWADRATW KWADRACIE",
//            "bukiet zwis",
//            "TYTANIK PIANKA",
//            "MARIKA PIANKA",
//            "KOSZ KOMINEK",
//            "2 KWADRATY",
//            "SERCE GÓRALKA",
//            "MAŁA DIANA",
//            "MALINKA",
//            "CUDENKO CZOSNEK",
//            "CUD",
//            "LAMPION DIANA D",
//            "GWIAZDA LAMPION",
//            "fifi",
//            "SERCE BRZOZA  JOLA",
//            "SERCE SZPIC 2",
//            "MARGARET",
//            "KALLAJULKA",
//            "KALLA MARTA",
//            "MYSŁOWIANKA",
//            "BUKIETSTORCZYK  KKK",
 //           "CELA",  //tego nie ma
//            "LOLA HORTENSIA",
//            "POLA",
//            "SERCE SZPIC",
//            "PEDRODANIEL",
//            "MIECZYK DANIEL",
//            "SERCE KOLOS",
//            "LAMPIN WYSOKI",
//            "lampion serce",
//            "złote słoneczniki",
//            "SERCE GIPS D",
//            "SERCE GIPS",
//            "SŁONECZNIK JULEK",
//            " SŁONECZNIK  AGI",
//            "JUKA PUDEŁKO",
//            "SŁONECZKO PIANKA",
//            "KOLCZASTY  PIANKA",
//            "KOŁO TY",
//            "KOŁO LILIA",
//            "MYSZKA PIWONIA",
//            "PASEK KRATKA",
//            "MATA FASZYNA",
//            "SERCE NALKESNIK",
//            "JEZ KOSZ",
//            "ZAGIEL",
//            "PUDRŁKO  RENIA",
//            "PUDEŁKO OSTRÓZKA",
//            "róg brzoza",
//            "KOSZ BIAŁY SYL",
//            "SERCE PUCHAR JOL",
//            "SERCEBRZOZA SRE",
//            "SERCE BRZOZA GORAL",
//            "SERCE KORA",
//            "MINI SKRZYDŁO",
//            "KOSZ PATYK",
//            "may",
//            "SERCE PALMA",
//            "SKRZYDŁA", //nie ma
//            "PRZETAK D",
//            "PRZETAK MAŁY",
//            "DAMA GIGANT",
//            "SERCE FASZYNA",
//            "3  PPP",
//            "KOSZYK  RENIA",
//            "ALEKSANDRA",
//            "SERCE OGONEK",
//            "KOSZYK KORA ALA",
//            "KOSZYCZEK LODKA",
//            "TACKA",
//            "SERCE GOSIA",
//            "SERCE PEŁNE R",
//            "MINI SERDUSZKO A",
//            "AMARYLIS PAŁKA",
 //           "BUKIET MALWA", //NIE MA
//            "BABY AGA",
//            "HUGO ",
//            "BENIA LASKA",
//            "KOŁO FASZYNA AGA",
//            "MALUCH STORCZYK",
//            "KALLA OLENKA",
//            "KAKTUS  GOSIA",
//            "WIOSNA BENIA",
//            "PUCHAR HIACYNT A",
//            "PUCHAR LEZACY PIANKA",
//            "PALMA",
//            "ZAJAC AZUR",
//            "NALESNIK",
//            "ZAJAC WUCZYKIJ",
//            "KOGUT MUSZELKA",
//            "KOGUT AZUR",
//            "OWIECZKA",
//            "puchar krokus",
//            "HIACYNT  Ł",
//            "PUCHAR TULIPAN",
//            "ELZA   DIANA",
//            "HANIA  HORTENSIA",
//            "DESKA MA LA NOWA",
//            "RAMONA KALLA PIANKA",
//            "MARYNIA KALLA PIANK",
//            "TULIPAMN KATARZYN7",
//            "KOSZ GNIAZDO",
//            "KORCIA RÓZA",
//            "KRATKA MAŁA",
//            "MUSZELKA TULIPAN",
//            "JAPONIA   ZOFIA",
//            "TOLA TULIPAN",
//            "LILIA WODNA",
//            "NEMO",
//            "GOSA KALLA",
//            "MAILO MIECZ",
//            "MONIKA MIECZ",
//            "TULIPAN LEŻĄCY",
//            "KAKTUS",
 //           "BRYGIDA",  //nie ma
//            "MIECIA",
//            "LUDMIŁA",
//            "LILIA MALUCH",
//            "FOKUS RÓZA",
//            "MACZUGA",
//            "KALINA",
//            "ELIZA KALLA",
//            "CZOSNEK",
//            "miranda miecz"
        ];

//dd($sheets);


        foreach ($sheets as $sheetTitle) {
            $range = $sheetTitle; // Używamy tytułu arkusza jako zakresu
            $response = $service->spreadsheets_values->get($spreadsheetId, $range);
            //dd($response);
            //ARKUSZ
            $pojedynczy_arkusz = $response->getValues();
            $wycena = new Wyceny();

            //usuń spacje nadmiarowe
            $sheetTitle = preg_replace('/\s+/', ' ', trim($sheetTitle));
            $wycena->setNazwa($sheetTitle);

            //$i - nr wiersza  // sheets: 3-> $i 2 -> WYCENA 1
            $suma_solo = 0;
            $suma_wazon = 0;
            $suma_kpl = 0;
            $suma_2w = 0;

            for ($i = 2; $i <= 43; $i++) {
                if (isset($pojedynczy_arkusz[$i])) {

                    $kolumna = $pojedynczy_arkusz[$i];


                       // $kolumna[0]; //robota
                       // $kolumna[1]; //sztuk
                       // $kolumna[2]; //cena
                    if($i>= 2 && $i<=7) {

                        $Polprodukt = $this->polproduktyRepository->findOneBy(['nazwa' => $kolumna[0]]);
                        $methodName = 'setSkladowa' . ($i - 1);
                        $wycena->$methodName($Polprodukt);

                        $methodName = 'setSztuk' . ($i - 1);
                        $methodGetSztuk = 'getSztuk' . ($i - 1);

                        $kolumna1Value = empty($kolumna[1]) ? 0 : $kolumna[1]; // Domyślnie 0, jeśli wartość jest pusta

// Wywołaj metodę na obiekcie $wycena, konwertując wartość na float
                        $convertedValue = $wycena->$methodName(floatval($kolumna1Value));

                        $methodName = 'setCena' . ($i - 1);
                        $methodGetCena = 'getCena' . ($i - 1);
                        $wycena->$methodName(empty($kolumna[2]) ? 0 : floatval(str_replace(',', '.', $kolumna[2])));

                        $methodName = 'setWartosc' . ($i - 1);
                        $wycena->$methodName($wycena->$methodGetSztuk() * $wycena->$methodGetCena());
                        $suma_solo += ($wycena->$methodGetSztuk() * $wycena->$methodGetCena());
                    }

                    if ($i == 8){ //podkład

                        $methodName = 'setNazwa' . ($i-1);
                        $wycena->$methodName('Podkład');

                        $methodName = 'setSztuk' . ($i-1);
                        $methodGetSztuk = 'getSztuk' . ($i-1);
                        $wycena->$methodName(empty($kolumna[1]) ? 0 : $kolumna[1]); //1-sztuk

                        $methodName = 'setCena' . ($i-1);
                        $methodGetCena = 'getCena' . ($i-1);
                        $wycena->$methodName(empty($kolumna[2]) ? 0 : floatval(str_replace(',', '.', $kolumna[2])));


                        $methodName = 'setWartosc' . ($i-1);
                        $wycena->$methodName($wycena->$methodGetSztuk() * $wycena->$methodGetCena());
                        $suma_solo += ($wycena->$methodGetSztuk() * $wycena->$methodGetCena());
                    }



                    //CD SOLO - CZESCI ZMIENNE
                    if ($i >= 9 && $i <= 21){
                        $Polprodukt = $this->polproduktyRepository->findOneBy(['nazwa' => $kolumna[0]]);
                        if($Polprodukt) {
                            $methodName = 'setSkladowa' . ($i - 1);
                            $wycena->$methodName($Polprodukt);
                        }else{
                            $methodName = 'setNazwa' . ($i-1);
                            $wycena->$methodName($kolumna[0]);
                        }

                        $methodName = 'setSztuk' . ($i-1);

                        $methodGetSztuk = 'getSztuk' . ($i-1);
                        $wycena->$methodName(empty($kolumna[1]) ? 0 : floatval($kolumna[1])); //1-sztuk

                        $methodName = 'setCena' . ($i-1);
                        $methodGetCena = 'getCena' . ($i-1);
                        $wycena->$methodName(empty($kolumna[2]) ? 0 : floatval(str_replace(',', '.', $kolumna[2])));

                        $methodName = 'setWartosc' . ($i-1);
                        $wycena->$methodName($wycena->$methodGetSztuk() * $wycena->$methodGetCena());
                        $suma_solo += ($wycena->$methodGetSztuk() * $wycena->$methodGetCena());
                    }
                    if ($i == 22){ //koszt -nie zliczamy

                    }
                    if ($i == 23){ //solo - marża
                        $wycena->setMarzaSolo(floatval(str_replace(',', '.', $kolumna[3])));
                        $wycena->setBlokujMarzaSolo(true);
                        $suma_solo += floatval(str_replace(',', '.', $kolumna[3]));
                        $wycena->setCenaSolo($suma_solo);
                    }
                    if ($i ==24)
                    {
                        //"WAZON"
                    }
                    if ($i >= 25 && $i <= 30){
                        $Polprodukt = $this->polproduktyRepository->findOneBy(['nazwa' => $kolumna[0]]);
                        $methodName = 'setSkladowa' . ($i-3);
                        $wycena->$methodName($Polprodukt);

                        $methodName = 'setSztuk' . ($i-3);

                        $methodGetSztuk = 'getSztuk' . ($i-3);
                        $wycena->$methodName(empty($kolumna[1]) ? 0 : floatval($kolumna[1])); //1-sztuk

                        $methodName = 'setCena' . ($i-3);
                        $methodGetCena = 'getCena' . ($i-3);
                        $wycena->$methodName(empty($kolumna[2]) ? 0 : floatval(str_replace(',', '.', $kolumna[2])));

                        $methodName = 'setWartosc' . ($i-3);
                        $wycena->$methodName($wycena->$methodGetSztuk() * $wycena->$methodGetCena());
                        $suma_wazon += $wycena->$methodGetSztuk() * $wycena->$methodGetCena();
                    }
                    if ($i == 31)//wazon
                    {
                        $Polprodukt = $this->polproduktyRepository->findOneBy(['nazwa' => 'Wazon']);
                        $methodName = 'setSkladowa' . ($i - 3);
                        $wycena->$methodName($Polprodukt);

                        $methodName = 'setSztuk' . ($i - 3);
                        $methodGetSztuk = 'getSztuk' . ($i - 3);
                        $wycena->$methodName(empty($kolumna[1]) ? 0 : $kolumna[1]); //1-sztuk

                        $methodName = 'setCena' . ($i - 3);
                        $methodGetCena = 'getCena' . ($i - 3);
                        $wycena->$methodName(empty($kolumna[2]) ? 0 : floatval(str_replace(',', '.', $kolumna[2])));

                        $methodName = 'setWartosc' . ($i - 3);
                        $wycena->$methodName($wycena->$methodGetSztuk() * $wycena->$methodGetCena());
                        $suma_wazon += $wycena->$methodGetSztuk() * $wycena->$methodGetCena();
                    }
                    if ($i >= 32 && $i <= 40){ //koncówka wazonu
                        $Polprodukt = $this->polproduktyRepository->findOneBy(['nazwa' => $kolumna[0]]);
                        $methodName = 'setSkladowa' . ($i-3);
                        $wycena->$methodName($Polprodukt);

                        $methodName = 'setSztuk' . ($i-3);

                        $methodGetSztuk = 'getSztuk' . ($i-3);
                        $wycena->$methodName(empty($kolumna[1]) ? 0 : floatval($kolumna[1])); //1-sztuk

                        $methodName = 'setCena' . ($i-3);
                        $methodGetCena = 'getCena' . ($i-3);
                        $wycena->$methodName(empty($kolumna[2]) ? 0 : floatval(str_replace(',', '.', $kolumna[2])));

                        $methodName = 'setWartosc' . ($i-3);
                        $wycena->$methodName($wycena->$methodGetSztuk() * $wycena->$methodGetCena());
                        $suma_wazon += $wycena->$methodGetSztuk() * $wycena->$methodGetCena();
                    }
                    if($i>= 41 && $i <= 42) //tego nie ma w wazonie nowym + koszt
                    {}
                    if ($i == 43){ //solo - marża
                        $wycena->setMarzaWazon(floatval(str_replace(',', '.', $kolumna[3])));
                        $wycena->setBlokujMarzaWazon(true);
                        $suma_wazon += floatval(str_replace(',', '.', $kolumna[3]));
                        $wycena->setCenaWazon($suma_wazon);

                        $wycena->setCenaKpl($suma_solo + $suma_wazon);
                        $wycena->setCenaKpl2w($suma_solo + (2*$suma_wazon));
                    }
                //koniec wiersza
                }
            }
            $wycena->setAktywny(false);

            $Grupa = $this->grupyRepository->findOneBy(['id' => 4]);
            $wycena->setGrupa($Grupa);


                $this->entityManager->persist($wycena);
                $this->entityManager->flush();

        }



        //KONKRETNE
//        $range = 'JULITA  PIANKA'; // here we use the name of the Sheet to get all the rows
//        $response = $service->spreadsheets_values->get($spreadsheetId, $range);
//        $values = $response->getValues();
//        dd($values);



        return $this->render('admin/es/es_index.html.twig', [
            // Przekazanie danych do widoku
        ]);
    }


}
