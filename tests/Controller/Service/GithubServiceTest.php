<?php

namespace App\Tests\Controller\Service;

use App\Service\GithubService;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

class GithubServiceTest extends TestCase
{
    /**
     * @dataProvider dinoNameProvider
     */
    public function testGetHealthReportReturnsCorrectHealthStatusForDino(string $expectedStatus, string $dinoName): void
    {
        $mockLogger = $this->createMock(LoggerInterface::class);
        $mockHttpClient = $this->createMock(HttpClientInterface::class);



        $service = new GithubService($mockHttpClient, $mockLogger);
        $mockResponse = $this->createMock(ResponseInterface::class);

        //stub
        $mockResponse
            ->method('toArray')
            ->willReturn([
                [
                    'title' => 'Daisy',
                    'labels' => [['name' => 'Status: Sick']],
                ],
                [
                    'title' => 'Maverick',
                    'labels' => [['name' => 'Status: Healthy']],
                ],
            ])
        ;
        $mockHttpClient
            ->method('request')
            ->willReturn($mockResponse)
        ;

        //ensure that the service is only calling GitHub one time and that it's using the right HTTP method with the correct URL
        $mockHttpClient
            ->expects(self::once())
//            ->expects(self::never()) //we wanted to assert that it was not called at all
            ->method('request')
            ->with('GET', 'https://api.github.com/repos/SymfonyCasts/dino-park/issues')
            ->willReturn($mockResponse)
        ;

        self::assertSame($expectedStatus, $service->getHealthReport($dinoName));

        //dd($mockLogger->info('info'));

        ///-----------------tak naprawde mozna uzyc wbudowanych metod, bedzie krocej:
        /// https://symfonycasts.com/screencast/phpunit/mock-http-client#play
        ///  $mockResponse = new MockResponse(json_encode([
        //                [
        //                    'title' => 'Maverick',
        //                    'labels' => [['name' => 'Status: Drowsy']],
        //                ],
        //            ]));
        //        $mockHttpClient = new MockHttpClient($mockResponse);
        //        $service = new GithubService($mockHttpClient, $this->createMock(LoggerInterface::class));
    }

    public function dinoNameProvider(): \Generator
    {
        yield 'Sick Dino' => [
            'Sick',
            'Daisy',
        ];

        yield 'Healthy Dino' => [
            'Healthy',
            'Maverick',
        ];
    }

}
