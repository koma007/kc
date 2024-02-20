<?php

namespace App\DataFixtures;

use App\Entity\ArrangementPrice;
use App\Entity\FvKody;
use App\Entity\Polprodukty;
use App\Entity\User;
use App\Entity\Wyceny;
use App\Repository\HurtoweRepository;
use App\Repository\UserRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;

//xlsx import
use PhpOffice\PhpSpreadsheet\IOFactory;
use Symfony\Bundle\SecurityBundle\Security;

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


//zasilanie kontrahentami z FakturaXL
    public function __construct(EntityManagerInterface $entityManager, UserRepository $userRepository)
    {
        $this->entityManager = $entityManager;
        $this->userRepository = $userRepository;

    }

    public function load(ObjectManager $manager)
    {






        // Załóżmy, że masz zestaw danych zapisany w tablicy
        $dataSet = [
            'ABARIS, Łódź',
            'ABTON, Łódź',
            'ADAMCZYK, Łódź',
            'ADAMCZYK2, Łódź',
            'AGROHURT, Zgierz',
            'ALDONA, Krośniewice',
            'ALDONA Krośniewice, Krośniewice',
            'AMPOL, Zduńska Wola',
            'ANNA, Sieradz',
            'ANNA PTAK, Rzgów',
            'ANPOL, Koluszki',
            'ANWO, Wolbórz',
            'BARTOSZ MAJEWSKI, Błaszki',
            'BARTYZEL, Rzgów',
            'BEATA, Zgierz',
            'BEEATA, Łódź',
            'BEZAT, Łódź',
            'BIBELO, Łódź',
            'BIMAR, Gomunice',
            'BOX Caban Anna, Będków',
            'BRATEK, Pabianice',
            'BUŁAKOWSKI, Koło',
            'CEBULA, Aleksandrów Łódzki',
            'CIESIELSKA, Ozorków',
            'CONTRNTEO BORSA, Łódź',
            'CUDA WIANKI, Łódź',
            'CYBULSKI, Zduńska Wola',
            'CZAREK, Bełchatów',
            'DAF, Moszczenica',
            'DANIEL, Muszyna',
            'DANIEL DYMEK, Czerwionka- Leszczyny',
            'DARIUSZ, Łask',
            'DARIUSZ 1, Smardzewice',
            'DAWID KARLA, Sieradz',
            'DEKOMAR, Szadek',
            'DEKOR, Zduńska Wola',
            'DMUCHAWCE, Płock',
            'DORIS, Łódź',
            'DOROTA, Aleksandrów Łódzki',
            'DUET, Witkowice',
            'DW WALCZAK, Grabów',
            'DYMEK, Czerwionka-Leszczyny',
            'DZIOMDZIORA, Łódź',
            'EL-JOT, Zgierz',
            'ELA, Łódź',
            'EMILKA ŁOWICZ KRYSTYNA ŚNIEGUŁA, Łowicz',
            'EPSILON, Lutomiersk',
            'FENIX, Poraj',
            'FIMEX, Pińczyce',
            'FLORES, Łęczyca',
            'FUKSJA, Brójce',
            'GERG, Łódź',
            'GIELDA KRAKOWIAK, Gorzkowice',
            'GLINKA VIODAR, Przeźmierowo',
            'GÓRKA, Łódź',
            'GRANIT, Łódź',
            'GROSIK, Rusiec',
            'GRZEGORZ TULIPAN, Łódź',
            'GRZELAK, Ldzań',
            'HALINKA, Łódź',
            'HOFMAN, Łódź',
            'IKEBANA, Tomaszów Mazowiecki',
            'IRYS, Drużbice',
            'IZABELA, Sulejów',
            'JAGIELSKI, Brzeziny',
            'JAKUB, Wilkszyce',
            'JANIC, Daleszyce',
            'JANIC 2, Daleszyce',
            'JANINA KAZUSEK, Łódź',
            'JANTEX KUNA, Zadzim',
            'JERUZAL PYŁKA, Kowiesy',
            'JOLA, Przykona',
            'JÓŹWIAK, Grzegorzew',
            'JUCA, Pabianice',
            'K&K, Łódź',
            'K&K KATARZYNA, Łódź',
            'KA-JA, Łaznowska Wola',
            'KACAŁA, Zelów',
            'KACPRZAK, Aleksandrów Łódzki',
            'KAJETAN, Bieliny',
            'KALIA, Gałków Mały',
            'KAMOCKA, Tomaszów Mazowiecki',
            'KAMRUT, Łowicz',
            'KAPRYS, Sieradz',
            'KARLIŃSKA, Ujazd',
            'KARLIŃSKI, Ujazd',
            'KAROLAK, Krężelewice',
            'KAROLAK ANNA, Daszyna',
            'KIR, Aleksandrów Łódzki',
            'KŁOS, Dobroń',
            'KOCH, Łódź',
            'KOCH1 JOANNA KOCH-SZUBERT, Łódź',
            'KONIECZKO, Łódź',
            'KORNELIA STĘPIEŃ, Łódź',
            'KORONA MARIOLA PRUŚ, Michałów',
            'KOZŁOWSKI, Andrespol',
            'KRAWCZYK, Radom',
            'KRAWĘCKA, Ujazd',
            'KRUPA, Koło',
            'KRZYŻANIAK, Krzyżanów',
            'KUBIAK, Sieradz',
            'KUBUŚ, Piotrków Trybunalski',
            'KUCHARSKA, Olkusz',
            'KUPIS, Żarnów',
            'KUROWSKI, Zduńska Wola',
            'KURZYK, Popławy-Kolonia',
            'KWIACIARNIA DUBRAWSKA, Łódź',
            'KWIACIARNIA Górecka, Andrespol',
            'KWIATY Kurzyk, Paradyż',
            'KWIATY U BEATY STĘPIEŃ, Końskie',
            'LAMPION, Zduńska Wola',
            'LEMA, Prudnik',
            'LESIŃSKI, Bielsko-Biała',
            'LIDER, Maciejów',
            'LISICKA, Zgierz',
            'LOTOS MITTURA, Nowy Dwór Mazowiecki',
            'ŁOWICZ ANDRZEJEWSKA, Łowicz',
            'MACIEJ-KA Wioletta Dolna, Bodzanów',
            'MAĆKIEWICZ, Łódź',
            'MAGDZIAK, Zadzim',
            'MAJA, Przeworsk',
            'MAŁA GALERIA, Kutno',
            'MARCIN ANDRZEJEWSKI RÓŻA, Głowno',
            'MAREK, Warta',
            'MARIOLA KRYSIAK, Stryków',
            'MARTA KOWALCZYK, Skierniewice',
            'MARWIS, Łask',
            'MATYSZKIEWICZ, Łódź',
            'MIĘDZY KWIATAMI, Kazimierz',
            'MIREX, Koluszki',
            'MITURA 1, Ostrołęka',
            'MITURA BEATA, Wola Okrzejska',
            'MITURA ROSSI, Maciejowice',
            'MOKADI, Moszczenica',
            'MORAWICA KRUK, Morawica',
            'MUCHA, Skierniewice',
            'NAPIÓRKOWSKA, Włocławek',
            'NATALIA, Moskwa',
            'NIEMIRSKA, Odrzywół',
            'NIŻNIK, Łódź',
            'NOVA FLORA, Brzeziny',
            'NOWA, Sosnowiec',
            'NOWACKA, Sieradz',
            'NOWY SĄCZ, Nowy Sącz',
            'OMYŁA, Sędziejowice',
            'ORCHIDEA, Sieradz',
            'OSTROWIECKA, Pińczów',
            'OZORKÓW, Ozorków',
            'PABIN, Łódź',
            'PACH, Brójce',
            'PAJS, Łódź',
            'PARDYŻ, Paradyż',
            'PIĄTKOWSKI, Łódź',
            'PIŁAT, Kielce',
            'PIOTR MAX, Koluszki',
            'PIOTR SIENKIEWICZ, Przemyśl',
            'PLUCIŃSKA, Poddębice',
            'PŁOMYCZEK, Końskie',
            'PODARUNEK, Łask',
            'PORLOS, Rzgów',
            'PRASNOWSKA, Ozorków',
            'PREKOP, Kowal',
            'PRIMOT, Warszawa',
            'Prudnik, Prudnik',
            'PRUDNIK2 FULBISZEWSKI, Prudnik',
            'PRZEDSZKOLE, Radzymin',
            'PRZEDSZKOLE PABIANICE, Pabianice',
            'PYŁKA, Kowiesy',
            'PYTKA, Łódź',
            'RABIEGA, Łódź',
            'RENATA WÓJCIK, Zduny',
            'RISTOK, Łódź',
            'ROGOWSKA, Łódź',
            'ROJEWSKA, Krośniewice',
            'ROSIŃSCY, Sieradz',
            'ROZUMEK, Łódź',
            'RÓŻA CHWAŁCZYŃSKA, Bełchatów',
            'RÓŻA WIŚNIEWSKA, Andrespol',
            'RUTA, Koluszki',
            'RYBNIK, Czerwionka-Leszczyny',
            'RYŻEWSKA, Rozprza',
            'SAFFRON Modzelewski, Łódź',
            'SARNIAK, Skierniewice',
            'SAVARES, Bełchatów',
            'SERENISSIMA, Łódź',
            'SKOWROŃSKA, Łódź',
            'SKROBOT, Gryfice',
            'SOWIŃSKA, Łódź',
            'SOWIŃSKI, Łódź',
            'STAL, Koziegłowy',
            'STAN MAX, Radziwiłłów',
            'Stelmasiak, Szadkowice-Ogrodzim',
            'STĘPIEŃ, Wola Krzysztoporska',
            'STORCZYK Urbański, Gostynin',
            'SUCHODAJ, Szydłów',
            'SWIGOŃ, Przedecz',
            'SYLWIA FULBISZEWSKA, Prudnik',
            'ŚWIAT BARW, Konin',
            'ŚWINICE WARCKIE, Świnice Warckie',
            'TEODEZJA TEODOR, Gomunice',
            'TĘCZA, Łódź',
            'TOMA KONIECZKO, Łódź',
            'TORNIEWSKA PIOTROWSKA, Płock',
            'TUŹNIK, Łódź',
            'U ALI WŁODARCZYK, Sławno',
            'UPOMINEK Piesiak, Mniszków',
            'UPOMINKI KAZUSEK, Łódź',
            'URBAŃSKA, Budziszewice',
            'WARSZAWA, Warszawa',
            'WASIAK, Kutno',
            'WIDAWSKA, Bielawy',
            'WIECZNOŚĆ NATORSKA, Gielniów',
            'WIELICHNOWSKA, Krośniewice',
            'WIELICHNOWSKI, Krośniewice',
            'WIKI, Gałkówek-Parcela',
            'WIMAX CHWAŁCZYŃSKI, Bełchatów',
            'WINDA PAWŁOWSKA, Częstochowa',
            'WINIARSKI, -',
            'WOJPOL, Łowicz',
            'WÓJT, Skierniewice',
            'ZABOST, Łowicz',
            'ZAKŁAD UNIWERSUM, Iwaniska',
            'ZAŁOGA, Łask',
            'ZĄBKOWSKA, Łódź',
            'ZOJA, Łódź',
            'ZOJA WALĘCIK ASTRA, Ozorków',
            'ZOSIA, Bogoria'
        ];

        // Pobierz repozytorium użytkowników

$i=1;
        foreach ($dataSet as $data) {
            echo $i.'<br/>';
            // Podziel dane na nazwę użytkownika i miasto
            [$shortName, $city] = explode(', ', $data);

            // Szukaj użytkownika po short_name
            $user = $this->entityManager->getRepository(User::class)->findOneBy(['short_name' => $shortName]);

            if ($user) {
                // Zaktualizuj miasto dla użytkownika
                $user->setCity($city);

                // Zapisz zmiany do bazy danych
                $manager->persist($user);
                $manager->flush();
            }
            $i++;
        }
    }


        public function load3(ObjectManager $manager)
    {
        // XML jako ciąg danych (przykładowy XML)
        $xmlData = '<dokumenty>

<klient>
<id>4883029</id>
<nazwa>&quot;ABARIS&quot; SPÓŁKA Z OGRANICZONĄ ODPOWIEDZIALNOŚCIĄ</nazwa>
<nazwa_skrocona>ABARIS</nazwa_skrocona>
<nip>9471899022</nip>
<ulica_i_numer>ul. Kolumny 315</ulica_i_numer>
<kod_pocztowy>93-642</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883032</id>
<nazwa>&quot;AGRO-HURT&quot; PRZEDSIĘBIORSTWO HANDLOWE ANNA ANTCZAK</nazwa>
<nazwa_skrocona>AGROHURT</nazwa_skrocona>
<nip>7320005505</nip>
<ulica_i_numer>Plac Targowy 14</ulica_i_numer>
<kod_pocztowy>95-100</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883163</id>
<nazwa>&quot;Beata Mitura Wyrób i Sprzedaż&quot;</nazwa>
<nazwa_skrocona>MITURA BEATA</nazwa_skrocona>
<nip>8251181115</nip>
<ulica_i_numer>ul. Spacerowa 39</ulica_i_numer>
<kod_pocztowy>21-480</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883042</id>
<nazwa>&quot;BEATA&quot; KWIACIARNIA BEATA ZDZIEBCZYŃSKA</nazwa>
<nazwa_skrocona>BEATA</nazwa_skrocona>
<nip>7321403952</nip>
<ulica_i_numer>ul. Spacerowa 3</ulica_i_numer>
<kod_pocztowy>95-100</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883170</id>
<nazwa>&quot;CAR-BUD&quot; JAKUB PAWŁOWSKI</nazwa>
<nazwa_skrocona>NATALIA</nazwa_skrocona>
<nip>7282539617</nip>
<ulica_i_numer>26</ulica_i_numer>
<kod_pocztowy>92-701</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883062</id>
<nazwa>&quot;DECOR &amp; STYL&quot; LISOWSKA MAŁGORZATA</nazwa>
<nazwa_skrocona>DEKOR</nazwa_skrocona>
<nip>8291515278</nip>
<ulica_i_numer>ul. Świerkowa 8C</ulica_i_numer>
<kod_pocztowy>98-220</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883088</id>
<nazwa>&quot;HALINA-ADAM-KINGA&quot; JANINA SŁOTWIŃSKA, ADAM SŁOTWIŃSKI, KINGA SŁOTWIŃSKA-PUTKA</nazwa>
<nazwa_skrocona>HALINKA</nazwa_skrocona>
<nip>7272693647</nip>
<ulica_i_numer>ul. Lontowa 28</ulica_i_numer>
<kod_pocztowy>94-312</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883097</id>
<nazwa>&quot;JANINA I MIECZYSŁAW KAZUSEK&quot; S.C. IWONA KAZUSEK, ANNA KAZUSEK</nazwa>
<nazwa_skrocona>JANINA KAZUSEK</nazwa_skrocona>
<nip>7280009275</nip>
<ulica_i_numer>ul. Zakładowa 56</ulica_i_numer>
<kod_pocztowy>92-402</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon>603030386</telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883100</id>
<nazwa>&quot;JOLA&quot;-SKLEP WIELOBRANŻOWY-JOLANTA WAPIŃSKA</nazwa>
<nazwa_skrocona>JOLA</nazwa_skrocona>
<nip>6681523103</nip>
<ulica_i_numer>Psary ul. Wiatraczna 10A</ulica_i_numer>
<kod_pocztowy>62-731</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883102</id>
<nazwa>&quot;JUCA&quot; MONIKA SŁOTWIŃSKA</nazwa>
<nazwa_skrocona>JUCA</nazwa_skrocona>
<nip>7251834634</nip>
<ulica_i_numer>ul. Zamkowa 41</ulica_i_numer>
<kod_pocztowy>95-200</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883034</id>
<nazwa>&quot;Kwiaciarnia u Aldony&quot; Anna Mordzak</nazwa>
<nazwa_skrocona>ALDONA Krośniewice</nazwa_skrocona>
<nip>7752487617</nip>
<ulica_i_numer>ul. Generała Józefa Bema 3</ulica_i_numer>
<kod_pocztowy>99-340</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883204</id>
<nazwa>&quot;KWIACIARNIA&quot; ARTUR RISTOK</nazwa>
<nazwa_skrocona>RISTOK</nazwa_skrocona>
<nip>7262522938</nip>
<ulica_i_numer>Strykowska, Wojska Polskiego</ulica_i_numer>
<kod_pocztowy>91-720</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883220</id>
<nazwa>&quot;Kwiaciarnia&quot; Jadwiga Skowrońska</nazwa>
<nazwa_skrocona>SKOWROŃSKA</nazwa_skrocona>
<nip>7281210878</nip>
<ulica_i_numer>ul. Pojezierska 10</ulica_i_numer>
<kod_pocztowy>91-322</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883180</id>
<nazwa>&quot;Kwiaciarnia&quot; sprzedaż kwiatów ciętych, doniczkowych, sztucznych, zniczy i innych artykułów Małgorzata Kopeć</nazwa>
<nazwa_skrocona>OZORKÓW</nazwa_skrocona>
<nip>7321010684</nip>
<ulica_i_numer>ul. Podleśna -</ulica_i_numer>
<kod_pocztowy>95-035</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883141</id>
<nazwa>&quot;LEMA&quot; Janina Lechowicz</nazwa>
<nazwa_skrocona>LEMA</nazwa_skrocona>
<nip>7551344414</nip>
<ulica_i_numer>ul. Cybisa 6/7</ulica_i_numer>
<kod_pocztowy>48-200</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883149</id>
<nazwa>&quot;MAŁA GALERIA Anna Kalinowska</nazwa>
<nazwa_skrocona>MAŁA GALERIA</nazwa_skrocona>
<nip>7752002040</nip>
<ulica_i_numer>ul. Henryka Sienkiewicza 15</ulica_i_numer>
<kod_pocztowy>99-300</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883158</id>
<nazwa>&quot;Między Kwiatami&quot; Kwiaciarnia i Pracownia Florystyczna Aleksandra Smolarek</nazwa>
<nazwa_skrocona>MIĘDZY KWIATAMI</nazwa_skrocona>
<nip>8281353213</nip>
<ulica_i_numer>pl. Kościuszki 2</ulica_i_numer>
<kod_pocztowy>95-083</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883182</id>
<nazwa>&quot;MONIKA&quot; TOMASZ PABIN</nazwa>
<nazwa_skrocona>PABIN</nazwa_skrocona>
<nip>7282185125</nip>
<ulica_i_numer>ul. Olechowska 82A</ulica_i_numer>
<kod_pocztowy>92-403</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883178</id>
<nazwa>&quot;ORCHIDEA&quot;S.C. ŚWIĘTOSŁAWSKA ALEKSANDRA PLAJZER ANNA PLAJZER ROMAN</nazwa>
<nazwa_skrocona>ORCHIDEA</nazwa_skrocona>
<nip>8271819213</nip>
<ulica_i_numer>ul. Wojska Polskiego 3</ulica_i_numer>
<kod_pocztowy>98-200</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon>8225562</telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883135</id>
<nazwa>&quot;RENO-STYL&quot; KUROWSKI PAWEŁ</nazwa>
<nazwa_skrocona>KUROWSKI</nazwa_skrocona>
<nip>8291330739</nip>
<ulica_i_numer>ul. Złota 2</ulica_i_numer>
<kod_pocztowy>98-220</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883089</id>
<nazwa>&quot;SKLEP OGRODNICZY&quot; KATARZYNA HOFMAN</nazwa>
<nazwa_skrocona>HOFMAN</nazwa_skrocona>
<nip>7261750962</nip>
<ulica_i_numer>ul. Jana Długosza 21</ulica_i_numer>
<kod_pocztowy>91-083</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883227</id>
<nazwa>&quot;SKLEP WIELOBRANŻOWY&quot; ANNA SUCHOJAD</nazwa>
<nazwa_skrocona>SUCHODAJ</nazwa_skrocona>
<nip>6551158912</nip>
<ulica_i_numer>ul. Rynek 15</ulica_i_numer>
<kod_pocztowy>28-225</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883257</id>
<nazwa>&quot;ZOJA&quot; P.P.H.U. ZBIGNIEW ZGIERSKI</nazwa>
<nazwa_skrocona>ZOJA</nazwa_skrocona>
<nip>7290106519</nip>
<ulica_i_numer>ul. Tomaszowska 110</ulica_i_numer>
<kod_pocztowy>93-635</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883235</id>
<nazwa>A TO STUDIO ALEKSANDRA PIOTROWSKA</nazwa>
<nazwa_skrocona>TORNIEWSKA PIOTROWSKA</nazwa_skrocona>
<nip>7742242311</nip>
<ulica_i_numer>ul. Dobrzyńska 51</ulica_i_numer>
<kod_pocztowy>09-400</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883030</id>
<nazwa>ABTON HOTEL SPÓŁKA Z OGRANICZONĄ ODPOWIEDZIALNOŚCIĄ</nazwa>
<nazwa_skrocona>ABTON</nazwa_skrocona>
<nip>7292743354</nip>
<ulica_i_numer>ul. Gen. Prądzyńskiego 9</ulica_i_numer>
<kod_pocztowy>93-478</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883249</id>
<nazwa>Agencja Sprzedaży Winiarski - Jakub Winiarski</nazwa>
<nazwa_skrocona>WINIARSKI</nazwa_skrocona>
<nip>6572494070</nip>
<ulica_i_numer></ulica_i_numer>
<kod_pocztowy></kod_pocztowy>
<kraj_id>PL</kraj_id>
<email>jakubwiniarski@outlook.com</email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883044</id>
<nazwa>AGNIESZKA HEJDUK &quot;BIBELO&quot;</nazwa>
<nazwa_skrocona>BIBELO</nazwa_skrocona>
<nip>7271983254</nip>
<ulica_i_numer>ul. Konstantynowska 34</ulica_i_numer>
<kod_pocztowy>94-303</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email>bibelo@op.pl</email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883136</id>
<nazwa>Agnieszka Kurzyk</nazwa>
<nazwa_skrocona>KURZYK</nazwa_skrocona>
<nip>7681018245</nip>
<ulica_i_numer>40</ulica_i_numer>
<kod_pocztowy>26-333</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email>kwiatki123@op.pl</email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883237</id>
<nazwa>Alina Włodarczyk Sklep u Ali</nazwa>
<nazwa_skrocona>U ALI WŁODARCZYK</nazwa_skrocona>
<nip>7681104950</nip>
<ulica_i_numer>ul. Jana Pawła II 34</ulica_i_numer>
<kod_pocztowy>26-332</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883096</id>
<nazwa>ANDRZEJ JANIC Firma Handlowo-Usługowa</nazwa>
<nazwa_skrocona>JANIC 2</nazwa_skrocona>
<nip>6571249061</nip>
<ulica_i_numer>ul. Zakościele 6</ulica_i_numer>
<kod_pocztowy>26-021</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883084</id>
<nazwa>ANDRZEJ OSTOJSKI SKLEP WIELOBRANŻOWY - &quot;GROSIK&quot;</nazwa>
<nazwa_skrocona>GROSIK</nazwa_skrocona>
<nip>8311142605</nip>
<ulica_i_numer>Wola Wiązowa 5</ulica_i_numer>
<kod_pocztowy>97-438</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883087</id>
<nazwa>ANDRZEJ SOWIŃSKI</nazwa>
<nazwa_skrocona>SOWIŃSKI</nazwa_skrocona>
<nip>7291075991</nip>
<ulica_i_numer>ul. Tadeusza Czackiego 2/10/132</ulica_i_numer>
<kod_pocztowy>93-504</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883039</id>
<nazwa>ANETA GOSZCZ PRZEDSIĘBIORSTWO PRODUKCYJNO - HANDLOWE &quot;ANWO&quot; P.P.H ANWO</nazwa>
<nazwa_skrocona>ANWO</nazwa_skrocona>
<nip>7712184589</nip>
<ulica_i_numer>ul. Mickiewicza 4</ulica_i_numer>
<kod_pocztowy>97-320</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883196</id>
<nazwa>Aneta Prekop Cuda Wianki</nazwa>
<nazwa_skrocona>PREKOP</nazwa_skrocona>
<nip>8882838079</nip>
<ulica_i_numer>ul. Kazimierza Wielkiego 3</ulica_i_numer>
<kod_pocztowy>87-820</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email>zuza2005@buziaczek.pl</email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883037</id>
<nazwa>ANNA DOMAŃSKA &quot;ANNA&quot;PPHU</nazwa>
<nazwa_skrocona>ANNA PTAK</nazwa_skrocona>
<nip>7281016194</nip>
<ulica_i_numer>ul. Grodziska 120</ulica_i_numer>
<kod_pocztowy>95-030</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883115</id>
<nazwa>Anna Karolak</nazwa>
<nazwa_skrocona>KAROLAK ANNA</nazwa_skrocona>
<nip>7752439759</nip>
<ulica_i_numer>Krężelewice 13</ulica_i_numer>
<kod_pocztowy>99-107</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883184</id>
<nazwa>ANNA MASIAREK &quot;PAJS&quot; P.P.H.</nazwa>
<nazwa_skrocona>PAJS</nazwa_skrocona>
<nip>7271068031</nip>
<ulica_i_numer>ul. Kwiatowa 37</ulica_i_numer>
<kod_pocztowy>94-238</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883179</id>
<nazwa>Anna Ostrowiecka Kwiaciarnia</nazwa>
<nazwa_skrocona>OSTROWIECKA</nazwa_skrocona>
<nip>6621079202</nip>
<ulica_i_numer>ul. Batalionów Chłopskich 23</ulica_i_numer>
<kod_pocztowy>28-400</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email>iniu@op.pl</email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883236</id>
<nazwa>Anna Tuźnik</nazwa>
<nazwa_skrocona>TUŹNIK</nazwa_skrocona>
<nip>7281468884</nip>
<ulica_i_numer>Adwentowicza 19</ulica_i_numer>
<kod_pocztowy>92-534</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883134</id>
<nazwa>ART. OGÓLNO SPOŻYWCZE KUPIS ELŻBIETA</nazwa>
<nazwa_skrocona>KUPIS</nazwa_skrocona>
<nip>7680000088</nip>
<ulica_i_numer>Plac Marszałka J. Piłsudskiego 3</ulica_i_numer>
<kod_pocztowy>26-330</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883225</id>
<nazwa>ARTYKUŁY ROLNO-SPOŻYWCZE I PRZEMYSŁOWE ARTYKUŁY ZOOLOGICZNO-PRZEMYSŁOWE GRAŻYNA STĘPIEŃ</nazwa>
<nazwa_skrocona>STĘPIEŃ</nazwa_skrocona>
<nip>7711423218</nip>
<ulica_i_numer>ul. Tadeusza Kościuszki 16</ulica_i_numer>
<kod_pocztowy>97-371</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883106</id>
<nazwa>BARBARA KACPRZAK</nazwa>
<nazwa_skrocona>KACPRZAK</nazwa_skrocona>
<nip>7261600168</nip>
<ulica_i_numer>ul. Wojska Polskiego 32/34</ulica_i_numer>
<kod_pocztowy>95-070</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883040</id>
<nazwa>Bartosz Majewski</nazwa>
<nazwa_skrocona>BARTOSZ MAJEWSKI</nazwa_skrocona>
<nip>8272273905</nip>
<ulica_i_numer>pl. Sulwińskiego 11</ulica_i_numer>
<kod_pocztowy>98-235</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883069</id>
<nazwa>Bogumiła Dziomdziora</nazwa>
<nazwa_skrocona>DZIOMDZIORA</nazwa_skrocona>
<nip>7291522438</nip>
<ulica_i_numer>ul. Rudzka 59/7/7A</ulica_i_numer>
<kod_pocztowy>93-423</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883246</id>
<nazwa>Bonio Grażyna Maria - WIKI</nazwa>
<nazwa_skrocona>WIKI</nazwa_skrocona>
<nip>7731635277</nip>
<ulica_i_numer>Borowa ul. Długa 381</ulica_i_numer>
<kod_pocztowy>95-041</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883052</id>
<nazwa>BORSA FAMILY SPÓŁKA Z OGRANICZONĄ ODPOWIEDZIALNOŚCIĄ</nazwa>
<nazwa_skrocona>CONTRNTEO BORSA</nazwa_skrocona>
<nip>9151820071</nip>
<ulica_i_numer>ul. Gliniana 29/31/8</ulica_i_numer>
<kod_pocztowy>91-336</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883160</id>
<nazwa>BOŻENA KOTUŁA &quot;LOTOS&quot; KOMPOZYCJE Z KWIATÓW</nazwa>
<nazwa_skrocona>LOTOS MITTURA</nazwa_skrocona>
<nip>5311243345</nip>
<ulica_i_numer>ul. Księcia Ziemowita III 13</ulica_i_numer>
<kod_pocztowy>05-100</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883058</id>
<nazwa>DANIEL DYMEK</nazwa>
<nazwa_skrocona>DANIEL DYMEK</nazwa_skrocona>
<nip>6423111052</nip>
<ulica_i_numer>Broniewskiego 9a/4</ulica_i_numer>
<kod_pocztowy>44-238</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email>strips92@wp.pl</email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883205</id>
<nazwa>DANIELA ROGOWSKA Handel obwoźny</nazwa>
<nazwa_skrocona>ROGOWSKA</nazwa_skrocona>
<nip>9471052886</nip>
<ulica_i_numer>ul. Wici 12/26</ulica_i_numer>
<kod_pocztowy>91-213</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883067</id>
<nazwa>DARIUSZ WALCZAK SKLEP PRZEMYSŁOWO - CHEMICZNY</nazwa>
<nazwa_skrocona>DW WALCZAK</nazwa_skrocona>
<nip>7751359426</nip>
<ulica_i_numer>pl. Kościuszki 24</ulica_i_numer>
<kod_pocztowy>99-150</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883065</id>
<nazwa>Dorota Lasa KWIACIARNIA</nazwa>
<nazwa_skrocona>DOROTA</nazwa_skrocona>
<nip>9471042669</nip>
<ulica_i_numer>ul. Józefa Piłsudskiego 1</ulica_i_numer>
<kod_pocztowy>95-070</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883064</id>
<nazwa>DOROTA ZGIERSKA &quot;DORIS&quot; P.P.H.U.</nazwa>
<nazwa_skrocona>DORIS</nazwa_skrocona>
<nip>9820197176</nip>
<ulica_i_numer>ul. Tomaszowska 110</ulica_i_numer>
<kod_pocztowy>93-635</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883162</id>
<nazwa>ELBA - TRIO USŁUGI HOTELARSKO-RESTAURACYJNE BARBARA NIEWIAROWSKA, DANIEL NIEWIAROWSKI SPÓŁKA CYWILNA</nazwa>
<nazwa_skrocona>MITURA 1</nazwa_skrocona>
<nip>7582359546</nip>
<ulica_i_numer>Aleja Wojska Polskiego 30</ulica_i_numer>
<kod_pocztowy>07-401</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883028</id>
<nazwa>EPSILON PRZEMYSŁAW LISIAK</nazwa>
<nazwa_skrocona>EPSILON</nazwa_skrocona>
<nip>9471844699</nip>
<ulica_i_numer>Orzechów 48</ulica_i_numer>
<kod_pocztowy>95-083</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883191</id>
<nazwa>EWELINA ZBROCH PŁOMYCZEK</nazwa>
<nazwa_skrocona>PŁOMYCZEK</nazwa_skrocona>
<nip>6581833206</nip>
<ulica_i_numer>ul. Browarna 34</ulica_i_numer>
<kod_pocztowy>26-200</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883176</id>
<nazwa>F.H. &quot;GALANT&quot; Maria Góra</nazwa>
<nazwa_skrocona>NOWY SĄCZ</nazwa_skrocona>
<nip>7341056407</nip>
<ulica_i_numer>ul. Teodora Axentowicza 28</ulica_i_numer>
<kod_pocztowy>33-300</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883074</id>
<nazwa>F.H.U. FENIX AGNIESZKA JANDUDA</nazwa>
<nazwa_skrocona>FENIX</nazwa_skrocona>
<nip>9542470787</nip>
<ulica_i_numer>Masłońskie ul. Letniskowa 50</ulica_i_numer>
<kod_pocztowy>42-360</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883125</id>
<nazwa>F.H.U. Sławomir Kozłowski</nazwa>
<nazwa_skrocona>KOZŁOWSKI</nazwa_skrocona>
<nip>7282271474</nip>
<ulica_i_numer>ul. Rokicińska 121/7</ulica_i_numer>
<kod_pocztowy>95-020</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883248</id>
<nazwa>F.P.H.U. &quot;KAR-POST&quot; KATARZYNA PAWŁOWSKA</nazwa>
<nazwa_skrocona>WINDA PAWŁOWSKA</nazwa_skrocona>
<nip>5732399783</nip>
<ulica_i_numer>ul. Sportowa 89/8</ulica_i_numer>
<kod_pocztowy>42-229</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883218</id>
<nazwa>FHU &quot;SAVARES&quot; SEBASTIAN KACZMAREK</nazwa>
<nazwa_skrocona>SAVARES</nazwa_skrocona>
<nip>7691061432</nip>
<ulica_i_numer>ul. Kolejowa 6</ulica_i_numer>
<kod_pocztowy>97-400</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email>savaresstudio@gmail.com</email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883075</id>
<nazwa>FHU DEKO- MAR MARIUSZ KRYZIŃSKI</nazwa>
<nazwa_skrocona>DEKOMAR</nazwa_skrocona>
<nip>8291680563</nip>
<ulica_i_numer>Szadkowice-Ogrodzim ul. Akacjowa 7</ulica_i_numer>
<kod_pocztowy>98-240</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email>kryzin2807@gmail.com</email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883139</id>
<nazwa>FHU KWIATY U BEATY BEATA STĘPIEŃ</nazwa>
<nazwa_skrocona>KWIATY U BEATY STĘPIEŃ</nazwa_skrocona>
<nip>7681317491</nip>
<ulica_i_numer>ul. Browarna 26</ulica_i_numer>
<kod_pocztowy>26-200</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883070</id>
<nazwa>FHU LEN ELŻBIETA KANIA</nazwa>
<nazwa_skrocona>ELA</nazwa_skrocona>
<nip>7261688832</nip>
<ulica_i_numer>Bałucki Rynek 3</ulica_i_numer>
<kod_pocztowy>91-445</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883026</id>
<nazwa>FIRMA &quot;BEATA&quot; BEATA PERZYŃSKA</nazwa>
<nazwa_skrocona>BEEATA</nazwa_skrocona>
<nip>7281514029</nip>
<ulica_i_numer>ul. Jarosława Haśka 11</ulica_i_numer>
<kod_pocztowy>92-503</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883210</id>
<nazwa>FIRMA HANDLOWA &quot; RÓŻA &quot; MAŁGORZATA CHWAŁCZYŃSKA</nazwa>
<nazwa_skrocona>RÓŻA CHWAŁCZYŃSKA</nazwa_skrocona>
<nip>7691026105</nip>
<ulica_i_numer>ul. Wojska Polskiego 114A</ulica_i_numer>
<kod_pocztowy>97-400</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883036</id>
<nazwa>FIRMA HANDLOWA &quot;ANNA&quot; ANNA PIESTRZYŃSKA</nazwa>
<nazwa_skrocona>ANNA</nazwa_skrocona>
<nip>8271446479</nip>
<ulica_i_numer>ul. Uniejowska 272</ulica_i_numer>
<kod_pocztowy>98-200</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883207</id>
<nazwa>FIRMA HANDLOWA ALICJA I KRZYSZTOF ROSIŃSCY SPÓŁKA JAWNA</nazwa>
<nazwa_skrocona>ROSIŃSCY</nazwa_skrocona>
<nip>8272162979</nip>
<ulica_i_numer>ul. Kolejowa 9</ulica_i_numer>
<kod_pocztowy>98-200</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon>516154287</telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883038</id>
<nazwa>FIRMA HANDLOWA ANPOL MAREK FRĄCZKOWSKI</nazwa>
<nazwa_skrocona>ANPOL</nazwa_skrocona>
<nip>7731236608</nip>
<ulica_i_numer>ul. Polna 33</ulica_i_numer>
<kod_pocztowy>95-040</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883189</id>
<nazwa>Firma Handlowa Piotr Sienkiewicz</nazwa>
<nazwa_skrocona>PIOTR SIENKIEWICZ</nazwa_skrocona>
<nip>7951024127</nip>
<ulica_i_numer>ul. Chmielna 1</ulica_i_numer>
<kod_pocztowy>37-700</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883108</id>
<nazwa>FIRMA HANDLOWO - USŁUGOWA KAJETAN WINIARSKI</nazwa>
<nazwa_skrocona>KAJETAN</nazwa_skrocona>
<nip>6572940374</nip>
<ulica_i_numer>ul. Świętokrzyska 5A</ulica_i_numer>
<kod_pocztowy>26-004</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883243</id>
<nazwa>Firma Handlowo Usługowa Alicja Widawska</nazwa>
<nazwa_skrocona>WIDAWSKA</nazwa_skrocona>
<nip>8341395506</nip>
<ulica_i_numer>Brzozów 49</ulica_i_numer>
<kod_pocztowy>99-423</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883060</id>
<nazwa>FIRMA HANDLOWO USŁUGOWA DARIUSZ CHRUŚCIELEWSKI</nazwa>
<nazwa_skrocona>DARIUSZ 1</nazwa_skrocona>
<nip>7681248844</nip>
<ulica_i_numer>ul. Główna 59</ulica_i_numer>
<kod_pocztowy>97-213</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883095</id>
<nazwa>Firma Handlowo Usługowa Janina Janic</nazwa>
<nazwa_skrocona>JANIC</nazwa_skrocona>
<nip>6571249078</nip>
<ulica_i_numer>ul. Zakościele 6</ulica_i_numer>
<kod_pocztowy>26-021</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883226</id>
<nazwa>FIRMA HANDLOWO-USŁUGOWA &quot;ZBYŚ&quot; Zbigniew Urbański</nazwa>
<nazwa_skrocona>STORCZYK Urbański</nazwa_skrocona>
<nip>9710263386</nip>
<ulica_i_numer>ul. Floriańska 14</ulica_i_numer>
<kod_pocztowy>09-500</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883206</id>
<nazwa>FIRMA HANDLOWO-USŁUGOWA ROJEWSKA BEATA</nazwa>
<nazwa_skrocona>ROJEWSKA</nazwa_skrocona>
<nip>7751793654</nip>
<ulica_i_numer>ul. Kolejowa 9</ulica_i_numer>
<kod_pocztowy>99-340</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883211</id>
<nazwa>FIRMA HANDLOWO-USŁUGOWA WŁADYSŁAW WIELICHNOWSKI 99-340 Krośniewice ul. Sienkiewicza 5</nazwa>
<nazwa_skrocona>WIELICHNOWSKI</nazwa_skrocona>
<nip>7751329750</nip>
<ulica_i_numer>ul. Henryka Sienkiewicza 5</ulica_i_numer>
<kod_pocztowy>99-340</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883120</id>
<nazwa>FLOWERS &amp; GARDEN JOANNA KOCH-SZUBERT</nazwa>
<nazwa_skrocona>KOCH1 JOANNA KOCH-SZUBERT</nazwa_skrocona>
<nip>7282337256</nip>
<ulica_i_numer>ul. Tatrzańska 116/8</ulica_i_numer>
<kod_pocztowy>93-208</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883078</id>
<nazwa>FUKSJA - Firma Handlowa Monika Bogdan</nazwa>
<nazwa_skrocona>FUKSJA</nazwa_skrocona>
<nip>7282133861</nip>
<ulica_i_numer>Giemzów 27</ulica_i_numer>
<kod_pocztowy>95-006</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883059</id>
<nazwa>GOSPODARSTWO ROLNE</nazwa>
<nazwa_skrocona>DARIUSZ</nazwa_skrocona>
<nip>7291065219</nip>
<ulica_i_numer>Łopatki ul. Pabianicka 44</ulica_i_numer>
<kod_pocztowy>98-100</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883091</id>
<nazwa>GOSPODARSTWO ROLNE IRENEUSZ CZART</nazwa>
<nazwa_skrocona>IRYS</nazwa_skrocona>
<nip>7691090215</nip>
<ulica_i_numer>Rawicz ul. Wojska Polskiego 24</ulica_i_numer>
<kod_pocztowy>97-403</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883098</id>
<nazwa>GOSPODARSTWO ROLNE KUNA JAN</nazwa>
<nazwa_skrocona>JANTEX KUNA</nazwa_skrocona>
<nip>8281005908</nip>
<ulica_i_numer>Kazimierzew 2</ulica_i_numer>
<kod_pocztowy>99-232</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883083</id>
<nazwa>GRANIT S.C. KRZYSZTOF BEZAT, ELŻBIETA BEZAT</nazwa>
<nazwa_skrocona>GRANIT</nazwa_skrocona>
<nip>9471838380</nip>
<ulica_i_numer>ul. Hodowlana 15</ulica_i_numer>
<kod_pocztowy>91-231</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon>601357093</telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883185</id>
<nazwa>Grażyna Michalska Przedsiębiorstwo Produkcyjno - Handlowo - Usługowe</nazwa>
<nazwa_skrocona>PARDYŻ</nazwa_skrocona>
<nip>7681000357</nip>
<ulica_i_numer>ul. Przedborska 1</ulica_i_numer>
<kod_pocztowy>26-333</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883079</id>
<nazwa>GREG-GARDEN GRZEGORZ WOJCIECHOWSKI</nazwa>
<nazwa_skrocona>GERG</nazwa_skrocona>
<nip>7281203393</nip>
<ulica_i_numer>ul. Herbowa 18</ulica_i_numer>
<kod_pocztowy>91-604</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email>biuro@greg-garden.pl</email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883085</id>
<nazwa>GRZEGORZ WOJCIECH GROŃSKI KWIACIARNIA&quot;TULIPAN&quot;</nazwa>
<nazwa_skrocona>GRZEGORZ TULIPAN</nazwa_skrocona>
<nip>7292433665</nip>
<ulica_i_numer>ul. Żubardzka 3</ulica_i_numer>
<kod_pocztowy>91-022</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883231</id>
<nazwa>GRZELAK JACEK KWIACIARNIA SPRZEDAŻ ARTYKUŁÓW PRZEMYSŁOWYCH</nazwa>
<nazwa_skrocona>ŚWINICE WARCKIE</nazwa_skrocona>
<nip>8281267608</nip>
<ulica_i_numer>ul. Kościuszki 14d</ulica_i_numer>
<kod_pocztowy>99-140</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883202</id>
<nazwa>HALINA RABIEGA</nazwa>
<nazwa_skrocona>RABIEGA</nazwa_skrocona>
<nip>7261049799</nip>
<ulica_i_numer>ul. Świtezianki 27/3</ulica_i_numer>
<kod_pocztowy>91-496</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883169</id>
<nazwa>HANDEL ART.PRZEMYSŁOWO-SPOŻYWCZYMI I KWIATAMI-EWA NAPIÓRKOWSKA</nazwa>
<nazwa_skrocona>NAPIÓRKOWSKA</nazwa_skrocona>
<nip>8880202621</nip>
<ulica_i_numer>ul. Promienna 9</ulica_i_numer>
<kod_pocztowy>87-800</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883055</id>
<nazwa>HANDEL I USŁUGI POGRZEBOWE KSAWERA CICHUS</nazwa>
<nazwa_skrocona>CZAREK</nazwa_skrocona>
<nip>7691601992</nip>
<ulica_i_numer>ul. Słoneczna 47</ulica_i_numer>
<kod_pocztowy>97-400</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883025</id>
<nazwa>HANDEL OBWOŹNY DANUTA ADAMCZYK</nazwa>
<nazwa_skrocona>ADAMCZYK</nazwa_skrocona>
<nip>7711088470</nip>
<ulica_i_numer>ul. Podgórna 25/16</ulica_i_numer>
<kod_pocztowy>93-278</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883145</id>
<nazwa>HANDEL OBWOŹNY ELŻBIETA ANDRZEJEWSKA</nazwa>
<nazwa_skrocona>ŁOWICZ ANDRZEJEWSKA</nazwa_skrocona>
<nip>8341073843</nip>
<ulica_i_numer>ul. Adama Mickiewicza 41</ulica_i_numer>
<kod_pocztowy>99-400</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883213</id>
<nazwa>HANDEL OBWOŹNY HARY JERZY</nazwa>
<nazwa_skrocona>RYBNIK</nazwa_skrocona>
<nip>6422121611</nip>
<ulica_i_numer>ul. Górnośląska 20</ulica_i_numer>
<kod_pocztowy>44-238</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883168</id>
<nazwa>HANDEL OBWOŹNY MAŁGORZATA MUCHA</nazwa>
<nazwa_skrocona>MUCHA</nazwa_skrocona>
<nip>8361748014</nip>
<ulica_i_numer>ul. mjr. Henryka Sucharskiego 13/31</ulica_i_numer>
<kod_pocztowy>96-100</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883031</id>
<nazwa>Handel obwoźny PIOTR ADAMCZYK</nazwa>
<nazwa_skrocona>ADAMCZYK2</nazwa_skrocona>
<nip>9471112022</nip>
<ulica_i_numer>ul. Inowrocławska 3/30</ulica_i_numer>
<kod_pocztowy>91-020</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883068</id>
<nazwa>HANDEL OBWOŹNY REMIGIUSZ DYMEK</nazwa>
<nazwa_skrocona>DYMEK</nazwa_skrocona>
<nip>6311011517</nip>
<ulica_i_numer>ul. Górnośląska 24</ulica_i_numer>
<kod_pocztowy>44-238</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883186</id>
<nazwa>Handel obwoźny TOMASZ PIĄTKOWSKI</nazwa>
<nazwa_skrocona>PIĄTKOWSKI</nazwa_skrocona>
<nip>7291277387</nip>
<ulica_i_numer>ul. Zenitowa 27</ulica_i_numer>
<kod_pocztowy>93-479</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883122</id>
<nazwa>HANDEL OBWOŹNY- WIESŁAW KONIECZNY VEL KONIECZKO</nazwa>
<nazwa_skrocona>KONIECZKO</nazwa_skrocona>
<nip>9471107038</nip>
<ulica_i_numer>ul. Tomasza Judyma 9/26</ulica_i_numer>
<kod_pocztowy>91-134</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883093</id>
<nazwa>INŻ - SAP ZBIGNIEW JAGIELSKI</nazwa>
<nazwa_skrocona>JAGIELSKI</nazwa_skrocona>
<nip>7471021620</nip>
<ulica_i_numer>ul. Różana 11</ulica_i_numer>
<kod_pocztowy>95-060</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email>ZIBISAPER40@TLEN.PL</email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883239</id>
<nazwa>IWONA KAZUSEK 1) &quot;JANINA I MIECZYSŁAW KAZUSEK&quot; SC. 2) KWIACIARIA I UPOMINKI IWONA KAZUSEK</nazwa>
<nazwa_skrocona>UPOMINKI KAZUSEK</nazwa_skrocona>
<nip>7291888062</nip>
<ulica_i_numer>ul. Zakładowa 56</ulica_i_numer>
<kod_pocztowy>92-402</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883092</id>
<nazwa>IZABELA MARKIEWICZ KIOSK HANDLOWY KWIACIARNIA</nazwa>
<nazwa_skrocona>IZABELA</nazwa_skrocona>
<nip>7711439538</nip>
<ulica_i_numer>ul. Cmentarna 22</ulica_i_numer>
<kod_pocztowy>97-330</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883082</id>
<nazwa>Jacek Górka</nazwa>
<nazwa_skrocona>GÓRKA</nazwa_skrocona>
<nip>9471975177</nip>
<ulica_i_numer>ul. Henryka Sienkiewicza 79/9u</ulica_i_numer>
<kod_pocztowy>90-058</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email>Jacek.diak@gmail.com</email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883254</id>
<nazwa>Jacek Załoga PRZEDSIĘBIORSTWO HANDLOWO-USŁUGOWE &quot;ZAŁOGA&quot;</nazwa>
<nazwa_skrocona>ZAŁOGA</nazwa_skrocona>
<nip>8311187938</nip>
<ulica_i_numer>ul. Stefana Batorego 39/34</ulica_i_numer>
<kod_pocztowy>98-100</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883094</id>
<nazwa>Jakub Just</nazwa>
<nazwa_skrocona>JAKUB</nazwa_skrocona>
<nip>8272132441</nip>
<ulica_i_numer>3</ulica_i_numer>
<kod_pocztowy>98-215</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883250</id>
<nazwa>JERZY WOJDA P.H.U. &quot; WOJPOL&quot;</nazwa>
<nazwa_skrocona>WOJPOL</nazwa_skrocona>
<nip>8341037669</nip>
<ulica_i_numer>ul. Łęczycka 82</ulica_i_numer>
<kod_pocztowy>99-400</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883105</id>
<nazwa>JUSTYNA KACAŁA KWIACIARNIA</nazwa>
<nazwa_skrocona>KACAŁA</nazwa_skrocona>
<nip>8311335907</nip>
<ulica_i_numer>ul. Tadeusza Kościuszki 7</ulica_i_numer>
<kod_pocztowy>97-425</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883103</id>
<nazwa>K&amp;K KATARZYNA NAWROCKA</nazwa>
<nazwa_skrocona>K&amp;K</nazwa_skrocona>
<nip>7291629745</nip>
<ulica_i_numer>ul. Nad Nerem 22</ulica_i_numer>
<kod_pocztowy>93-448</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883104</id>
<nazwa>K&amp;K KATARZYNA SADOWSKA</nazwa>
<nazwa_skrocona>K&amp;K KATARZYNA</nazwa_skrocona>
<nip>7331345400</nip>
<ulica_i_numer>ul. Olsztyńska 18/44</ulica_i_numer>
<kod_pocztowy>91-327</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883109</id>
<nazwa>KALIA Leonarda Jakubowska</nazwa>
<nazwa_skrocona>KALIA</nazwa_skrocona>
<nip>7731314596</nip>
<ulica_i_numer>ul. Borowiecka 4</ulica_i_numer>
<kod_pocztowy>95-041</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883110</id>
<nazwa>KAMIL RUTA &quot;KAMRUT&quot;</nazwa>
<nazwa_skrocona>KAMRUT</nazwa_skrocona>
<nip>8341691558</nip>
<ulica_i_numer>ul. Katarzynów 79</ulica_i_numer>
<kod_pocztowy>99-400</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883061</id>
<nazwa>Karina Olejniczak Kwiaciarnia &quot;KARLA&quot;</nazwa>
<nazwa_skrocona>DAWID KARLA</nazwa_skrocona>
<nip>8272330419</nip>
<ulica_i_numer>ul. Cypriana Bazylika 15</ulica_i_numer>
<kod_pocztowy>98-200</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883101</id>
<nazwa>KAT-JA KATARZYNA JÓŹWIAK</nazwa>
<nazwa_skrocona>JÓŹWIAK</nazwa_skrocona>
<nip>6661227815</nip>
<ulica_i_numer>ul. Szkolna 28F</ulica_i_numer>
<kod_pocztowy>62-640</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883117</id>
<nazwa>KATARZYNA DUBRAWSKA KWIACIARNIA&quot;TOP-KWIAT&quot;</nazwa>
<nazwa_skrocona>KWIACIARNIA DUBRAWSKA</nazwa_skrocona>
<nip>9820338688</nip>
<ulica_i_numer>ul. Konna 2</ulica_i_numer>
<kod_pocztowy>93-447</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883107</id>
<nazwa>KATARZYNA JAKSOŃ P.H.U.&quot;KA-JA&quot;</nazwa>
<nazwa_skrocona>KA-JA</nazwa_skrocona>
<nip>7282273674</nip>
<ulica_i_numer>ul. Południowa 108</ulica_i_numer>
<kod_pocztowy>97-221</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883133</id>
<nazwa>Katarzyna Kucharska Kwiaciarnia Kasi</nazwa>
<nazwa_skrocona>KUCHARSKA</nazwa_skrocona>
<nip>6372037178</nip>
<ulica_i_numer>ul. Sławkowska 13</ulica_i_numer>
<kod_pocztowy>32-300</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883192</id>
<nazwa>Katarzyna Maniecka &quot;PODARUNEK&quot;</nazwa>
<nazwa_skrocona>PODARUNEK</nazwa_skrocona>
<nip>8291300460</nip>
<ulica_i_numer>ul. Warszawska 27</ulica_i_numer>
<kod_pocztowy>98-100</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883043</id>
<nazwa>KB KRZYSZTOF BEZAT; GRANIT KRZYSZTOF BEZAT</nazwa>
<nazwa_skrocona>BEZAT</nazwa_skrocona>
<nip>7260380167</nip>
<ulica_i_numer>ul. Hodowlana 15</ulica_i_numer>
<kod_pocztowy>91-231</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883119</id>
<nazwa>KONRAD KOCH</nazwa>
<nazwa_skrocona>KOCH</nazwa_skrocona>
<nip>7281227011</nip>
<ulica_i_numer>ul. Tatrzańska 116/8</ulica_i_numer>
<kod_pocztowy>93-208</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883157</id>
<nazwa>Krystyna Matyszkiewicz</nazwa>
<nazwa_skrocona>MATYSZKIEWICZ</nazwa_skrocona>
<nip>7271831691</nip>
<ulica_i_numer>ul. Armii Krajowej 60/14</ulica_i_numer>
<kod_pocztowy>94-046</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883072</id>
<nazwa>KRYSTYNA ŚNIEGUŁA HANDEL OBWOŹNY</nazwa>
<nazwa_skrocona>EMILKA ŁOWICZ KRYSTYNA ŚNIEGUŁA</nazwa_skrocona>
<nip>8341474571</nip>
<ulica_i_numer>ul. Jana Pawła II 59</ulica_i_numer>
<kod_pocztowy>99-400</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883252</id>
<nazwa>KRZYSZTOF ZABOST</nazwa>
<nazwa_skrocona>ZABOST</nazwa_skrocona>
<nip>8341332807</nip>
<ulica_i_numer>ul. Blich -</ulica_i_numer>
<kod_pocztowy>99-400</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883128</id>
<nazwa>Kwiaciarnia &quot; VIOLA &quot; Violetta Krupa</nazwa>
<nazwa_skrocona>KRUPA</nazwa_skrocona>
<nip>6661148903</nip>
<ulica_i_numer>ul. Józefa Poniatowskiego</ulica_i_numer>
<kod_pocztowy>62-600</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883077</id>
<nazwa>KWIACIARNIA &quot;FLORES&quot; WIOLETTA JANCZYK</nazwa>
<nazwa_skrocona>FLORES</nazwa_skrocona>
<nip>7751307760</nip>
<ulica_i_numer>ul. Kaliska N/N</ulica_i_numer>
<kod_pocztowy>99-100</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883175</id>
<nazwa>KWIACIARNIA &quot;KONWALIA&quot; JOLANTA NOWACKA-ŚWIĘTCZAK</nazwa>
<nazwa_skrocona>NOWACKA</nazwa_skrocona>
<nip>8271014478</nip>
<ulica_i_numer>ul. Tadeusza Kościuszki 21</ulica_i_numer>
<kod_pocztowy>98-200</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883229</id>
<nazwa>KWIACIARNIA &quot;MAGNOLIA&quot; BOGUSŁAW ŚWIGOŃ</nazwa>
<nazwa_skrocona>SWIGOŃ</nazwa_skrocona>
<nip>6661211582</nip>
<ulica_i_numer>ul. Jana Kilińskiego 8</ulica_i_numer>
<kod_pocztowy>62-635</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883190</id>
<nazwa>Kwiaciarnia &quot;Niezapominajka&quot; Agnieszka Plucińska</nazwa>
<nazwa_skrocona>PLUCIŃSKA</nazwa_skrocona>
<nip>8281299525</nip>
<ulica_i_numer>pl. Kościuszki 28</ulica_i_numer>
<kod_pocztowy>99-200</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883150</id>
<nazwa>KWIACIARNIA &quot;RÓŻA&quot; MARCIN ANDRZEJEWSKI</nazwa>
<nazwa_skrocona>MARCIN ANDRZEJEWSKI RÓŻA</nazwa_skrocona>
<nip>7331126098</nip>
<ulica_i_numer>ul. Obrońców Westerplatte 28</ulica_i_numer>
<kod_pocztowy>95-015</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883242</id>
<nazwa>KWIACIARNIA - Wasiak Zbigniew</nazwa>
<nazwa_skrocona>WASIAK</nazwa_skrocona>
<nip>7751187439</nip>
<ulica_i_numer>ul. Zgoda 5</ulica_i_numer>
<kod_pocztowy>99-300</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883212</id>
<nazwa>KWIACIARNIA AGNIESZKA RUTA</nazwa>
<nazwa_skrocona>RUTA</nazwa_skrocona>
<nip>7281778461</nip>
<ulica_i_numer>ul. 11 Listopada 39</ulica_i_numer>
<kod_pocztowy>95-040</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883033</id>
<nazwa>KWIACIARNIA ALDONA MORDZAK</nazwa>
<nazwa_skrocona>ALDONA</nazwa_skrocona>
<nip>7751033535</nip>
<ulica_i_numer>ul. gen. J. Bema 3</ulica_i_numer>
<kod_pocztowy>99-340</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883137</id>
<nazwa>KWIACIARNIA ANNA GÓRECKA</nazwa>
<nazwa_skrocona>KWIACIARNIA Górecka</nazwa_skrocona>
<nip>7282376279</nip>
<ulica_i_numer>ul. Rokicińska 132</ulica_i_numer>
<kod_pocztowy>95-020</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883146</id>
<nazwa>KWIACIARNIA ANNA MAĆKIEWICZ</nazwa>
<nazwa_skrocona>MAĆKIEWICZ</nazwa_skrocona>
<nip>7291946256</nip>
<ulica_i_numer>ul. Rzgowska 194B</ulica_i_numer>
<kod_pocztowy>93-311</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883215</id>
<nazwa>KWIACIARNIA ANNA SOWIŃSKA</nazwa>
<nazwa_skrocona>SOWIŃSKA</nazwa_skrocona>
<nip>7291715025</nip>
<ulica_i_numer>ul. Smutna 5</ulica_i_numer>
<kod_pocztowy>91-729</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883245</id>
<nazwa>KWIACIARNIA ARTYKUŁY PRZEMYSŁOWE JADWIGA WIELICHNOWSKA 99-340 KROŚNIEWICE, UL. SIENKIEWICZA 5</nazwa>
<nazwa_skrocona>WIELICHNOWSKA</nazwa_skrocona>
<nip>7751141265</nip>
<ulica_i_numer>ul. Henryka Sienkiewicza 5</ulica_i_numer>
<kod_pocztowy>99-340</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883131</id>
<nazwa>KWIACIARNIA BEATA KUBIAK</nazwa>
<nazwa_skrocona>KUBIAK</nazwa_skrocona>
<nip>8271359668</nip>
<ulica_i_numer>ul. Uniejowska 185</ulica_i_numer>
<kod_pocztowy>98-200</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883053</id>
<nazwa>KWIACIARNIA CudaWianki ROBERT SOSNA</nazwa>
<nazwa_skrocona>CUDA WIANKI</nazwa_skrocona>
<nip>7262319752</nip>
<ulica_i_numer>ul. Mieczysławy Ćwiklińskiej 22</ulica_i_numer>
<kod_pocztowy>92-508</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883063</id>
<nazwa>KWIACIARNIA DMUCHAWCE MAGDALENA STRZAŁKOWSKA</nazwa>
<nazwa_skrocona>DMUCHAWCE</nazwa_skrocona>
<nip>7742260289</nip>
<ulica_i_numer>ul. Faustyna Piaska 1A</ulica_i_numer>
<kod_pocztowy>09-407</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883194</id>
<nazwa>KWIACIARNIA Halina Prasnowska</nazwa>
<nazwa_skrocona>PRASNOWSKA</nazwa_skrocona>
<nip>7321042833</nip>
<ulica_i_numer>ul. Podleśna -</ulica_i_numer>
<kod_pocztowy>95-035</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883054</id>
<nazwa>KWIACIARNIA HENRYK CYBULSKI</nazwa>
<nazwa_skrocona>CYBULSKI</nazwa_skrocona>
<nip>8290000939</nip>
<ulica_i_numer>ul. Sieradzka 25</ulica_i_numer>
<kod_pocztowy>98-220</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883090</id>
<nazwa>KWIACIARNIA IKEBANA DANUTA PIGOŃ</nazwa>
<nazwa_skrocona>IKEBANA</nazwa_skrocona>
<nip>7731427107</nip>
<ulica_i_numer>ul. św. Antoniego 50</ulica_i_numer>
<kod_pocztowy>97-200</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883144</id>
<nazwa>KWIACIARNIA JADWIGA LISICKA</nazwa>
<nazwa_skrocona>LISICKA</nazwa_skrocona>
<nip>7321497054</nip>
<ulica_i_numer>ul. Stefana Cezaka 13</ulica_i_numer>
<kod_pocztowy>95-100</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883123</id>
<nazwa>KWIACIARNIA KORNELIA Agnieszka Mikulska-Stępień</nazwa>
<nazwa_skrocona>KORNELIA STĘPIEŃ</nazwa_skrocona>
<nip>9471204899</nip>
<ulica_i_numer>ul. Rojna 41/41</ulica_i_numer>
<kod_pocztowy>91-134</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883165</id>
<nazwa>Kwiaciarnia MACIEJ-KA Wioletta Dolna</nazwa>
<nazwa_skrocona>MACIEJ-KA Wioletta Dolna</nazwa_skrocona>
<nip>9710278956</nip>
<ulica_i_numer>ul. Księcia Józefa Poniatowskiego 27</ulica_i_numer>
<kod_pocztowy>09-470</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883201</id>
<nazwa>KWIACIARNIA USŁUGI KAMIENIARSKIE Łukasz Pytka</nazwa>
<nazwa_skrocona>PYTKA</nazwa_skrocona>
<nip>7272785119</nip>
<ulica_i_numer>ul. Srebrzyńska 1</ulica_i_numer>
<kod_pocztowy>91-074</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883051</id>
<nazwa>KWIATY I DEKORACJE KATARZYNA CIESIELSKA</nazwa>
<nazwa_skrocona>CIESIELSKA</nazwa_skrocona>
<nip>7321729317</nip>
<ulica_i_numer>Wróblew 39</ulica_i_numer>
<kod_pocztowy>95-035</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883183</id>
<nazwa>Kwiaty, Art. przemysłowe Renata Pach</nazwa>
<nazwa_skrocona>PACH</nazwa_skrocona>
<nip>7281029943</nip>
<ulica_i_numer>Kurowice ul. Pabianicka 8</ulica_i_numer>
<kod_pocztowy>95-006</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883143</id>
<nazwa>LIDER PAWEŁ ZIÓŁKOWSKI</nazwa>
<nazwa_skrocona>LIDER</nazwa_skrocona>
<nip>8291535878</nip>
<ulica_i_numer>1E</ulica_i_numer>
<kod_pocztowy>98-220</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883156</id>
<nazwa>MAR&amp;WIS SPÓŁKA Z OGRANICZONĄ ODPOWIEDZIALNOŚCIĄ I WSPÓLNICY - SPÓŁKA KOMANDYTOWA</nazwa>
<nazwa_skrocona>MARWIS</nazwa_skrocona>
<nip>7692212152</nip>
<ulica_i_numer>ul. Warszawska 123</ulica_i_numer>
<kod_pocztowy>98-100</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883193</id>
<nazwa>MAREK POGODA &quot;ROSETTA PRIM&quot;</nazwa>
<nazwa_skrocona>PORLOS</nazwa_skrocona>
<nip>7291554639</nip>
<ulica_i_numer>ul. Tuszyńska 72/74/F62</ulica_i_numer>
<kod_pocztowy>95-030</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email>pogodamarek@o2.pl</email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883172</id>
<nazwa>MARIA NIŻNIK</nazwa>
<nazwa_skrocona>NIŻNIK</nazwa_skrocona>
<nip>7291018102</nip>
<ulica_i_numer>ul. Juliana Ejsmonda 3/13</ulica_i_numer>
<kod_pocztowy>93-249</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883255</id>
<nazwa>Maria Ząbkowska</nazwa>
<nazwa_skrocona>ZĄBKOWSKA</nazwa_skrocona>
<nip>7261427362</nip>
<ulica_i_numer>ul. Doły 7</ulica_i_numer>
<kod_pocztowy>91-727</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883099</id>
<nazwa>Małgorzata Pyłka Sklep spożywczo-przemysłowy &quot;KAMIL&quot;</nazwa>
<nazwa_skrocona>JERUZAL PYŁKA</nazwa_skrocona>
<nip>8351031556</nip>
<ulica_i_numer>Jeruzal 74</ulica_i_numer>
<kod_pocztowy>96-111</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883199</id>
<nazwa>MIASTO PABIANICE</nazwa>
<nazwa_skrocona>PRZEDSZKOLE PABIANICE</nazwa_skrocona>
<nip>7311962756</nip>
<ulica_i_numer>ul. Zamkowa 16</ulica_i_numer>
<kod_pocztowy>95-200</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon>0422155676</telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883241</id>
<nazwa>MIASTO STOŁECZNE WARSZAWA</nazwa>
<nazwa_skrocona>WARSZAWA</nazwa_skrocona>
<nip>5252248481</nip>
<ulica_i_numer>Plac Bankowy 3/5</ulica_i_numer>
<kod_pocztowy>00-950</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon>0225953050</telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883114</id>
<nazwa>MK LiFt - MARCIN KAROLAK</nazwa>
<nazwa_skrocona>KAROLAK</nazwa_skrocona>
<nip>5070003414</nip>
<ulica_i_numer>13</ulica_i_numer>
<kod_pocztowy>99-107</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883171</id>
<nazwa>Niemirska Barbara &quot;KWIACIARNIA&quot;</nazwa>
<nazwa_skrocona>NIEMIRSKA</nazwa_skrocona>
<nip>7981001622</nip>
<ulica_i_numer>ul. Plac Kilińskiego 2</ulica_i_numer>
<kod_pocztowy>26-425</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883173</id>
<nazwa>Nova Flora Wioletta Jagielska</nazwa>
<nazwa_skrocona>NOVA FLORA</nazwa_skrocona>
<nip>7282607566</nip>
<ulica_i_numer>ul. Tadeusza Kościuszki 66</ulica_i_numer>
<kod_pocztowy>95-060</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883174</id>
<nazwa>NOWA SPÓŁKA AKCYJNA W UPADŁOŚCI</nazwa>
<nazwa_skrocona>NOWA</nazwa_skrocona>
<nip>5252543530</nip>
<ulica_i_numer>ul. Braci Mieroszewskich 50</ulica_i_numer>
<kod_pocztowy>41-219</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email>BIURO@E-NOWA.PL</email>
<telefon>600818995</telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883256</id>
<nazwa>P.H.U. &quot;ASTRA&quot; Henryka Walęcik</nazwa>
<nazwa_skrocona>ZOJA WALĘCIK ASTRA</nazwa_skrocona>
<nip>7321817731</nip>
<ulica_i_numer>ul. Adamówek 15</ulica_i_numer>
<kod_pocztowy>95-035</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883153</id>
<nazwa>P.H.U. &quot;MARIOLA&quot; MARIOLA KRYSIAK</nazwa>
<nazwa_skrocona>MARIOLA KRYSIAK</nazwa_skrocona>
<nip>7331010591</nip>
<ulica_i_numer>pl. Waleriana Łukasińskiego 11</ulica_i_numer>
<kod_pocztowy>95-010</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883166</id>
<nazwa>P.H.U.&quot;MOKADI&quot; WIESŁAWA KAŹMIERCZAK</nazwa>
<nazwa_skrocona>MOKADI</nazwa_skrocona>
<nip>7710000450</nip>
<ulica_i_numer>Wola Moszczenicka ul. Proszeńska 1a</ulica_i_numer>
<kod_pocztowy>97-310</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883116</id>
<nazwa>P.P.H.U. &quot; KIR &quot; Monika Kowalska</nazwa>
<nazwa_skrocona>KIR</nazwa_skrocona>
<nip>7261009825</nip>
<ulica_i_numer>ul. Piotrkowska 56</ulica_i_numer>
<kod_pocztowy>95-070</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883155</id>
<nazwa>P.P.H.U. &quot;ARKE&quot; ARKADIUSZ KOWALCZYK</nazwa>
<nazwa_skrocona>MARTA KOWALCZYK</nazwa_skrocona>
<nip>8361298433</nip>
<ulica_i_numer>ul. Miedniewicka 31</ulica_i_numer>
<kod_pocztowy>96-100</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883159</id>
<nazwa>P.P.H.U.&quot;MIREX-POL&quot; Import-Export Stanisław Major</nazwa>
<nazwa_skrocona>MIREX</nazwa_skrocona>
<nip>7730015265</nip>
<ulica_i_numer>ul. Staszica 30</ulica_i_numer>
<kod_pocztowy>95-040</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883035</id>
<nazwa>PHU AMPOL MAŁGORZATA SIEKIERSKA</nazwa>
<nazwa_skrocona>AMPOL</nazwa_skrocona>
<nip>8291518242</nip>
<ulica_i_numer>ul. Cicha 3</ulica_i_numer>
<kod_pocztowy>98-220</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883177</id>
<nazwa>PHU GRAŻYNA OMYŁA</nazwa>
<nazwa_skrocona>OMYŁA</nazwa_skrocona>
<nip>8311065112</nip>
<ulica_i_numer>Marzenin ul. Zduńska 1a</ulica_i_numer>
<kod_pocztowy>98-160</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883148</id>
<nazwa>PIOTR CZEREBA FIRMA HANDLOWA &quot;MAJA&quot;</nazwa>
<nazwa_skrocona>MAJA</nazwa_skrocona>
<nip>7941173446</nip>
<ulica_i_numer>ul. Czarnieckiego 48</ulica_i_numer>
<kod_pocztowy>37-200</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883167</id>
<nazwa>PIOTR KRUK - HANDEL OBWOŹNY</nazwa>
<nazwa_skrocona>MORAWICA KRUK</nazwa_skrocona>
<nip>6571484833</nip>
<ulica_i_numer>Wola Morawica,Podemłynie 33</ulica_i_numer>
<kod_pocztowy>26-026</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883188</id>
<nazwa>PIOTR MAX - HURTOWNIA ZNICZY Piotr Czarnecki</nazwa>
<nazwa_skrocona>PIOTR MAX</nazwa_skrocona>
<nip>7281343013</nip>
<ulica_i_numer>ul. Strażacka 2</ulica_i_numer>
<kod_pocztowy>95-040</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email>akul821@wp.pl</email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883140</id>
<nazwa>PIOTR ZIÓŁKOWSKI PRZEDSIĘBIORSTWO HANDLOWO-PRODUKCYJNO-USŁUGOWE &quot;LAMPION&quot;</nazwa>
<nazwa_skrocona>LAMPION</nazwa_skrocona>
<nip>8291522663</nip>
<ulica_i_numer>Maciejów 1E</ulica_i_numer>
<kod_pocztowy>98-220</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883216</id>
<nazwa>PMM Paweł Modzelewski</nazwa>
<nazwa_skrocona>SAFFRON Modzelewski</nazwa_skrocona>
<nip>7262652090</nip>
<ulica_i_numer>ul. Obywatelska 102/104</ulica_i_numer>
<kod_pocztowy>94-104</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883050</id>
<nazwa>PPH &quot;GEMINI&quot; Krystyna Cebula</nazwa>
<nazwa_skrocona>CEBULA</nazwa_skrocona>
<nip>9471041428</nip>
<ulica_i_numer>ul. Krótka 7</ulica_i_numer>
<kod_pocztowy>95-070</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883223</id>
<nazwa>PPH &quot;STAN MAX&quot; spółka cywilna Krystyna Staniak, Jacek Staniak</nazwa>
<nazwa_skrocona>STAN MAX</nazwa_skrocona>
<nip>8381780015</nip>
<ulica_i_numer>ul. Warszawska 42</ulica_i_numer>
<kod_pocztowy>96-332</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon>0468310140</telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883195</id>
<nazwa>PRIMOT SPÓŁKA Z OGRANICZONĄ ODPOWIEDZIALNOŚCIĄ</nazwa>
<nazwa_skrocona>PRIMOT</nazwa_skrocona>
<nip>5213959918</nip>
<ulica_i_numer>ul. Bergamotki 4/38</ulica_i_numer>
<kod_pocztowy>02-765</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883056</id>
<nazwa>Przedsiębiorstwo &quot;DAF-UL&quot; DARIUSZ MICHALSKI</nazwa>
<nazwa_skrocona>DAF</nazwa_skrocona>
<nip>7731673987</nip>
<ulica_i_numer>Gazomia Nowa 101</ulica_i_numer>
<kod_pocztowy>97-310</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883132</id>
<nazwa>PRZEDSIĘBIORSTWO HANDLOWE &quot;KUBUŚ&quot; CEZARY STASZEK</nazwa>
<nazwa_skrocona>KUBUŚ</nazwa_skrocona>
<nip>7711151257</nip>
<ulica_i_numer>ul. Łódzka 43</ulica_i_numer>
<kod_pocztowy>97-300</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883233</id>
<nazwa>PRZEDSIĘBIORSTWO HANDLOWE &quot;TEO-DOR&quot;</nazwa>
<nazwa_skrocona>TEODEZJA TEODOR</nazwa_skrocona>
<nip>7721414965</nip>
<ulica_i_numer>Kletnia ul. Częstochowska 6</ulica_i_numer>
<kod_pocztowy>97-545</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883208</id>
<nazwa>PRZEDSIĘBIORSTWO HANDLOWE Róża Wiśniewska</nazwa>
<nazwa_skrocona>RÓŻA WIŚNIEWSKA</nazwa_skrocona>
<nip>7280131220</nip>
<ulica_i_numer>Justynów ul. Łódzka 25C</ulica_i_numer>
<kod_pocztowy>95-020</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883076</id>
<nazwa>PRZEDSIĘBIORSTWO HANDLOWO - USŁUGOWE &quot;FIMEX&quot; MICHAŁ FIKIER</nazwa>
<nazwa_skrocona>FIMEX</nazwa_skrocona>
<nip>5771215586</nip>
<ulica_i_numer>ul. Myszkowska 2</ulica_i_numer>
<kod_pocztowy>42-350</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883228</id>
<nazwa>PRZEDSIĘBIORSTWO HANDLOWO - USŁUGOWE &quot;ŚWIAT BARW&quot; BUŁAKOWSKI PIOTR</nazwa>
<nazwa_skrocona>ŚWIAT BARW</nazwa_skrocona>
<nip>6652748644</nip>
<ulica_i_numer>ul. Henryka Wieniawskiego 6</ulica_i_numer>
<kod_pocztowy>62-510</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883214</id>
<nazwa>PRZEDSIĘBIORSTWO HANDLOWO USŁUGOWE GRANIBET-MARCEL RYŻEWSKI</nazwa>
<nazwa_skrocona>RYŻEWSKA</nazwa_skrocona>
<nip>7712878642</nip>
<ulica_i_numer>ul. Legionów Polskich 8</ulica_i_numer>
<kod_pocztowy>97-340</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883200</id>
<nazwa>Przedsiębiorstwo Handlowo Usługowe KAMIL, Małgorzata Pyłka, Kamil Pyłka spółka cywilna</nazwa>
<nazwa_skrocona>PYŁKA</nazwa_skrocona>
<nip>8361871654</nip>
<ulica_i_numer>Wola Pękoszewska 72</ulica_i_numer>
<kod_pocztowy>96-111</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon>698654239</telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883247</id>
<nazwa>PRZEDSIĘBIORSTWO PRODUKCYJNO HANDLOWE WIMAX WALDEMAR CHWAŁCZYŃSKI</nazwa>
<nazwa_skrocona>WIMAX CHWAŁCZYŃSKI</nazwa_skrocona>
<nip>7691007697</nip>
<ulica_i_numer>ul. Wojska Polskiego 114A</ulica_i_numer>
<kod_pocztowy>97-400</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883224</id>
<nazwa>Przedsiębiorstwo Produkcyjno Handlowo Usługowe ,, E S S A J&quot; Ewa Stelmasiak</nazwa>
<nazwa_skrocona>Stelmasiak</nazwa_skrocona>
<nip>8291024190</nip>
<ulica_i_numer>ul. Spacerowa 32</ulica_i_numer>
<kod_pocztowy>98-240</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883222</id>
<nazwa>PRZEDSIĘBIORSTWO PRODUKCYJNO HANDLOWO USŁUGOWE POLTUR JANUSZ STAL</nazwa>
<nazwa_skrocona>STAL</nazwa_skrocona>
<nip>5771125191</nip>
<ulica_i_numer>Cynków ul. Nadrzeczna 7</ulica_i_numer>
<kod_pocztowy>42-350</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883049</id>
<nazwa>Przedsiębiorstwo Produkcyjno Usługowe Handlowe &quot; CHLEBOS&quot; Justyna Bułakowska</nazwa>
<nazwa_skrocona>BUŁAKOWSKI</nazwa_skrocona>
<nip>6661931336</nip>
<ulica_i_numer>ul. Wrzosowa 10</ulica_i_numer>
<kod_pocztowy>62-600</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883066</id>
<nazwa>Przedsiębiorstwo Produkcyjno-Handlowo-Usługowe &quot;DUET&quot; Tomasz Jezik</nazwa>
<nazwa_skrocona>DUET</nazwa_skrocona>
<nip>9490515904</nip>
<ulica_i_numer>ul. Częstochowska 22B</ulica_i_numer>
<kod_pocztowy>42-270</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email>jtomcio@wp.pl</email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883198</id>
<nazwa>PRZEDSZKOLE NR 2 IM. CZERWONEGO KAPTURKA W RADZYMINIE</nazwa>
<nazwa_skrocona>PRZEDSZKOLE</nazwa_skrocona>
<nip>1251108729</nip>
<ulica_i_numer>ul. Wincentego Witosa 78</ulica_i_numer>
<kod_pocztowy>05-250</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email>przedszkole2@radzymin.pl</email>
<telefon>735039559</telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883142</id>
<nazwa>Robert Lesiński</nazwa>
<nazwa_skrocona>LESIŃSKI</nazwa_skrocona>
<nip>5471976565</nip>
<ulica_i_numer>ul. Zwierzyniecka 14/35</ulica_i_numer>
<kod_pocztowy>43-300</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883164</id>
<nazwa>ROSSI Ewa Kałaska</nazwa>
<nazwa_skrocona>MITURA ROSSI</nazwa_skrocona>
<nip>8261135312</nip>
<ulica_i_numer>ul. Rynek 14</ulica_i_numer>
<kod_pocztowy>08-480</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883045</id>
<nazwa>S.C.&quot;BIMAR&quot; M.BIELASIŃSKA,M.BIELASIŃSKI,J.BIELASIŃSKI</nazwa>
<nazwa_skrocona>BIMAR</nazwa_skrocona>
<nip>7722284045</nip>
<ulica_i_numer>ul. Krasińskiego 33</ulica_i_numer>
<kod_pocztowy>97-545</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email>bimargom@wp.pl</email>
<telefon>446842400</telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883217</id>
<nazwa>SAR-POL Mariusz Sarniak</nazwa>
<nazwa_skrocona>SARNIAK</nazwa_skrocona>
<nip>8361272497</nip>
<ulica_i_numer>ul. Strobowska 19</ulica_i_numer>
<kod_pocztowy>96-100</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email>kubamagdziarz@wp.pl</email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883219</id>
<nazwa>SERENISSIMA POLSKA SPÓŁKA Z OGRANICZONĄ ODPOWIEDZIALNOŚCIĄ</nazwa>
<nazwa_skrocona>SERENISSIMA</nazwa_skrocona>
<nip>7251938227</nip>
<ulica_i_numer>ul. Aleje Politechniki 3 A</ulica_i_numer>
<kod_pocztowy>90-924</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883111</id>
<nazwa>SKLEP &quot;KAPRYS&quot; JOANNA GŁADKOWSKA</nazwa>
<nazwa_skrocona>KAPRYS</nazwa_skrocona>
<nip>8270009759</nip>
<ulica_i_numer>ul. Jana Pawła II 30</ulica_i_numer>
<kod_pocztowy>98-200</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883048</id>
<nazwa>Sklep Ogrodniczy &quot;&quot;BRATEK&quot; KRZYSZTOF MAJDA</nazwa>
<nazwa_skrocona>BRATEK</nazwa_skrocona>
<nip>7271502496</nip>
<ulica_i_numer>Porszewice 12a</ulica_i_numer>
<kod_pocztowy>95-200</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883187</id>
<nazwa>SKLEP PRYZMAT ANETA PIŁAT, SŁAWOMIR PIŁAT</nazwa>
<nazwa_skrocona>PIŁAT</nazwa_skrocona>
<nip>6570008987</nip>
<ulica_i_numer>ul. Piekoszowska 32</ulica_i_numer>
<kod_pocztowy>25-601</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon>413451811</telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883057</id>
<nazwa>SKLEP PRZEMYSŁOWO-HANDLOWY DANIEL GUMULAK</nazwa>
<nazwa_skrocona>DANIEL</nazwa_skrocona>
<nip>7343555505</nip>
<ulica_i_numer>Leluchów 20</ulica_i_numer>
<kod_pocztowy>33-370</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883238</id>
<nazwa>Sklep Wielobranżowy - Kwiaciarnia Teresa Piesiak</nazwa>
<nazwa_skrocona>UPOMINEK Piesiak</nazwa_skrocona>
<nip>7711753720</nip>
<ulica_i_numer>Błogie Szlacheckie 20</ulica_i_numer>
<kod_pocztowy>26-341</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883130</id>
<nazwa>Sklep Wielobranżowy Renata Krzyżaniak</nazwa>
<nazwa_skrocona>KRZYŻANIAK</nazwa_skrocona>
<nip>7752216812</nip>
<ulica_i_numer>Łęki Kościelne 48</ulica_i_numer>
<kod_pocztowy>99-314</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883221</id>
<nazwa>SKROBOT HALINA PHU 1001 DROBIAZGÓW</nazwa>
<nazwa_skrocona>SKROBOT</nazwa_skrocona>
<nip>8571506518</nip>
<ulica_i_numer>ul. Bracka 12</ulica_i_numer>
<kod_pocztowy>72-300</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883151</id>
<nazwa>Skup i sprzedaż płodow rolnych Jan Marek</nazwa>
<nazwa_skrocona>MAREK</nazwa_skrocona>
<nip>8271484474</nip>
<ulica_i_numer>Cielce 78</ulica_i_numer>
<kod_pocztowy>98-290</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883121</id>
<nazwa>SPRZEDAŻ KWIATÓW EWELINA KAMOCKA</nazwa>
<nazwa_skrocona>KAMOCKA</nazwa_skrocona>
<nip>7732328264</nip>
<ulica_i_numer>Aleja Marszałka Józefa Piłsudskiego 4</ulica_i_numer>
<kod_pocztowy>97-200</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883126</id>
<nazwa>SPRZEDAŻ KWIATÓW I ARTYKUŁÓW PRZEMYSŁOWYCH - EMILIA KRAWĘCKA</nazwa>
<nazwa_skrocona>KRAWĘCKA</nazwa_skrocona>
<nip>7731058986</nip>
<ulica_i_numer>Plac Wolności 17B</ulica_i_numer>
<kod_pocztowy>97-225</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883080</id>
<nazwa>STUDIO DEKORACJI SYLWIA KRAKOWIAK</nazwa>
<nazwa_skrocona>GIELDA KRAKOWIAK</nazwa_skrocona>
<nip>7712903541</nip>
<ulica_i_numer>Rynek 6</ulica_i_numer>
<kod_pocztowy>97-350</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883181</id>
<nazwa>SZENDZIELARZ PAWEŁ HANDEL OBWOŹNY</nazwa>
<nazwa_skrocona>Prudnik</nazwa_skrocona>
<nip>7551459850</nip>
<ulica_i_numer>ul. Parkowa 12</ulica_i_numer>
<kod_pocztowy>48-200</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883232</id>
<nazwa>TĘCZA-KWIAT KATARZYNA JEDYK</nazwa>
<nazwa_skrocona>TĘCZA</nazwa_skrocona>
<nip>7291190806</nip>
<ulica_i_numer>ul. Władysława Broniewskiego 65</ulica_i_numer>
<kod_pocztowy>93-258</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883234</id>
<nazwa>TO-MA MARZENA KONIECZNA VEL KONIECZKO</nazwa>
<nazwa_skrocona>TOMA KONIECZKO</nazwa_skrocona>
<nip>9471749021</nip>
<ulica_i_numer>ul. Traktorowa 74A/48</ulica_i_numer>
<kod_pocztowy>91-129</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883253</id>
<nazwa>Tomasz Dyka Zakład Usługowy UNIWERSUM</nazwa>
<nazwa_skrocona>ZAKŁAD UNIWERSUM</nazwa_skrocona>
<nip>8631005471</nip>
<ulica_i_numer>ul. Ujazdowska 14</ulica_i_numer>
<kod_pocztowy>27-570</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883197</id>
<nazwa>U Dziadka Mirosław Fulbiszewski</nazwa>
<nazwa_skrocona>PRUDNIK2 FULBISZEWSKI</nazwa_skrocona>
<nip>7551242464</nip>
<ulica_i_numer>ul. Parkowa 12</ulica_i_numer>
<kod_pocztowy>48-200</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883230</id>
<nazwa>U Dziadka SYLWIA FULBISZEWSKA</nazwa>
<nazwa_skrocona>SYLWIA FULBISZEWSKA</nazwa_skrocona>
<nip>7551242375</nip>
<ulica_i_numer>Parkowa 12</ulica_i_numer>
<kod_pocztowy>48-200</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883240</id>
<nazwa>Urbańska Dorota HANDEL KWIATAMI Art. Przemysłowe i Chemiczne</nazwa>
<nazwa_skrocona>URBAŃSKA</nazwa_skrocona>
<nip>7731804998</nip>
<ulica_i_numer>ul. Brzezińska 4</ulica_i_numer>
<kod_pocztowy>97-212</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883244</id>
<nazwa>URSZULA NATORSKA Kwiaty i art. przemysłowe oraz usługi pogrzebowe &quot;WIECZNOŚĆ&quot;</nazwa>
<nazwa_skrocona>WIECZNOŚĆ NATORSKA</nazwa_skrocona>
<nip>7991561363</nip>
<ulica_i_numer>ul. Plac Wolności 17</ulica_i_numer>
<kod_pocztowy>26-434</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883147</id>
<nazwa>Usługi Transportowe i Handel Zbigniew Magdziak</nazwa>
<nazwa_skrocona>MAGDZIAK</nazwa_skrocona>
<nip>8280000599</nip>
<ulica_i_numer>Kazimierzew 13</ulica_i_numer>
<kod_pocztowy>99-232</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883081</id>
<nazwa>VIODAR SPÓŁKA Z OGRANICZONĄ ODPOWIEDZIALNOŚCIĄ</nazwa>
<nazwa_skrocona>GLINKA VIODAR</nazwa_skrocona>
<nip>7811980616</nip>
<ulica_i_numer>ul. Ogrodowa 119</ulica_i_numer>
<kod_pocztowy>62-081</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883124</id>
<nazwa>WARSZTAT MECHANIKI POJAZDOWEJ MARIOLA PRUŚ</nazwa>
<nazwa_skrocona>KORONA MARIOLA PRUŚ</nazwa_skrocona>
<nip>6621002984</nip>
<ulica_i_numer>Zagajów 30</ulica_i_numer>
<kod_pocztowy>28-411</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email>prusbud@gmail.com</email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883112</id>
<nazwa>Wieńce, Wiązanki, Znicze &quot;DALIA&quot; Beata Karlińska</nazwa>
<nazwa_skrocona>KARLIŃSKA</nazwa_skrocona>
<nip>7731424646</nip>
<ulica_i_numer>ul. Cmentarna 9</ulica_i_numer>
<kod_pocztowy>97-225</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883113</id>
<nazwa>WIEŃCE, WIĄZANKI, ZNICZE &quot;DALIA&quot; KONRAD KARLIŃSKI</nazwa>
<nazwa_skrocona>KARLIŃSKI</nazwa_skrocona>
<nip>7731063183</nip>
<ulica_i_numer>ul. Cmentarna -</ulica_i_numer>
<kod_pocztowy>97-225</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883118</id>
<nazwa>WILD DOG 4X4 SYLWESTER KŁOS</nazwa>
<nazwa_skrocona>KŁOS</nazwa_skrocona>
<nip>8311292948</nip>
<ulica_i_numer>Orpelów-Numerki 10</ulica_i_numer>
<kod_pocztowy>95-082</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883209</id>
<nazwa>Wioletta Rozumek</nazwa>
<nazwa_skrocona>ROZUMEK</nazwa_skrocona>
<nip>7311401963</nip>
<ulica_i_numer>ul. Piotrkowska 317/-</ulica_i_numer>
<kod_pocztowy>93-035</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883203</id>
<nazwa>Wójcik Renata</nazwa>
<nazwa_skrocona>RENATA WÓJCIK</nazwa_skrocona>
<nip>8341468286</nip>
<ulica_i_numer>Szymanowice 1</ulica_i_numer>
<kod_pocztowy>99-440</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883251</id>
<nazwa>WÓJT STANISŁAWA</nazwa>
<nazwa_skrocona>WÓJT</nazwa_skrocona>
<nip>8361431139</nip>
<ulica_i_numer>ul. Dąbie 9</ulica_i_numer>
<kod_pocztowy>96-100</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883138</id>
<nazwa>Włodzimierz Kurzyk Handel Kwiaty i Artykuły Przemysłowe</nazwa>
<nazwa_skrocona>KWIATY Kurzyk</nazwa_skrocona>
<nip>7681530500</nip>
<ulica_i_numer>Popławy-Kolonia 40</ulica_i_numer>
<kod_pocztowy>26-333</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883041</id>
<nazwa>ZAKŁAD PRZETWÓRSTWA MIĘSNEGO &quot;GROT&quot; SPÓŁKA Z OGRANICZONĄ ODPOWIEDZIALNOŚCIĄ</nazwa>
<nazwa_skrocona>BARTYZEL</nazwa_skrocona>
<nip>7290108866</nip>
<ulica_i_numer>Starowa Góra ul. Zakładowa 3/7</ulica_i_numer>
<kod_pocztowy>95-030</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon>422302201</telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883071</id>
<nazwa>Zakład Wielobranżowy &quot;El-JOT&quot; Jolanta Hauk</nazwa>
<nazwa_skrocona>EL-JOT</nazwa_skrocona>
<nip>9471004114</nip>
<ulica_i_numer>ul. Aleksandrowska 24</ulica_i_numer>
<kod_pocztowy>95-100</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email>biuro@eljot.lodz.pl</email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883086</id>
<nazwa>ZENONA GRZELAK FIRMA HANDLOWA H &amp; P</nazwa>
<nazwa_skrocona>GRZELAK</nazwa_skrocona>
<nip>7691359350</nip>
<ulica_i_numer>19</ulica_i_numer>
<kod_pocztowy>95-082</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883129</id>
<nazwa>ZIELONA GALERIA MARIA KRAWCZYK</nazwa>
<nazwa_skrocona>KRAWCZYK</nazwa_skrocona>
<nip>7960103949</nip>
<ulica_i_numer>ul. Henryka Sienkiewicza 36</ulica_i_numer>
<kod_pocztowy>26-600</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883047</id>
<nazwa>Zofia Caban - Firma Handlowo-Usługowa &quot;Anna&quot;</nazwa>
<nazwa_skrocona>BOX Caban Anna</nazwa_skrocona>
<nip>7731317376</nip>
<ulica_i_numer>Kalinów 15</ulica_i_numer>
<kod_pocztowy>97-319</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

<klient>
<id>4883258</id>
<nazwa>Zofia Snopek Kwiaciarnia &quot;Zosia&quot;</nazwa>
<nazwa_skrocona>ZOSIA</nazwa_skrocona>
<nip>8661311741</nip>
<ulica_i_numer>ul. Rynek 23</ulica_i_numer>
<kod_pocztowy>28-210</kod_pocztowy>
<kraj_id>PL</kraj_id>
<email></email>
<telefon></telefon>
<nr_konta_bankowego></nr_konta_bankowego>
</klient>

</dokumenty>';

        // Przekonwertuj XML na obiekt SimpleXMLElement
        $xml = simplexml_load_string($xmlData);

        // Iteruj przez każdy element klienta w pliku XML
        foreach ($xml->klient as $klient) {
            // Twórz nowy obiekt encji User
            $user = new User();

            // Ustaw właściwości obiektu User na podstawie danych z pliku XML
            $user->setName((string)$klient->nazwa);
            $user->setShortName((string)$klient->nazwa_skrocona);
            $user->setNip((string)$klient->nip);
            $user->setStreetAndNumber((string)$klient->ulica_i_numer);
            $user->setPostalCode((string)$klient->kod_pocztowy);
            $user->setCountryId((string)$klient->kraj_id);
            // Ustaw pozostałe właściwości...
            $id = (string)$klient->id;
            $user->setEmail('kontrahent' . $id . '@danmal.pl');
            $user->setPassword('Danmal'.$id);
            $roles = ['ROLE_USER', 'ROLE_KLIENT_FIRMA'];
            $user->setRoles($roles);

            // Dodaj nowego użytkownika do bazy danych
            $manager->persist($user);
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
