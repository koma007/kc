<?php

namespace App\Tests\Controller;

use App\Entity\Dinosaur;
use PHPUnit\Framework\TestCase;

class DinosaurTest extends TestCase
{



    public function sizeDescriptionProvider(): \Generator
    {
        yield '10 Meter Large Dino' => [10, 'Large'];
        yield '5 Meter Medium Dinooooo' => [5, 'Medium'];
        yield '4 Meter Small Dino' => [4, 'Small'];
    }

    public function testCanSetAndGetData(): void
    {

        $dino = new Dinosaur('Tyrusik','Najgrozniejszy',15,'Wolny');


        self::assertSame('Tyrusik', $dino->getName());
        self::assertSame('Najgrozniejszy', $dino->getGenus());
        self::assertEquals(15, $dino->getLength());
        self::assertSame('Wolny', $dino->getEnclosure());
    }

    //pierwotna wersja
        public function testDinosourOver10OrMoreMetersIsLarge(): void
    {
        $dino = new Dinosaur('Tyrusik','Najgrozniejszy',15,'Wolny');
        self::assertSame('Large', $dino->getLengthDescription());
    }

    //ulepszona wersja
    /**
     * @dataProvider sizeDescriptionProvider
     */
    public function testDinoHasCorrectSizeDescriptionFromLength(int $length, string $expectedSize): void
    {
        $dino = new Dinosaur(name: 'Big Eaty', length: $length);
        self::assertSame($expectedSize, $dino->getLengthDescription());
    }


//    public function testDinosourBetween5And9IsMedium(): void
//    {
//        $dino = new Dinosaur('Tyrusik','Najgrozniejszy',8,'Wolny');
//        self::assertSame('Medium', $dino->getLengthDescription());
//    }
//
//    public function testDinosourUnder5IsSmall(): void
//    {
//        $dino = new Dinosaur('Tyrusik','Najgrozniejszy',4,'Wolny');
//        self::assertSame('Small', $dino->getLengthDescription());
//    }


    public function testIsAcceptingVisitors()
    {
        $dino = new Dinosaur('Alan');
        self::assertTrue($dino->isHealthy());
    }


    public function testIsNotAcceptingVisitorsIfSick(): void
    {
        //$this->markTestIncomplete();
        //$this->markTestSkipped();

        $dino = new Dinosaur('Bumpy');
        $dino->setHealth('Sick');

        self::assertFalse($dino->isHealthy());
    }

}