<?php

namespace App\Service;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class GithubService
{

    public function __construct(private HttpClientInterface $httpClient, private LoggerInterface $logger)
    {
    }
    public function getHealthReport(string $dinosaurName): string
    {
        $health = 'Healthy'; //gdyby serwis nie działał


        $response = $this->httpClient->request(
            method: 'GET',
            url: 'https://api.github.com/repos/SymfonyCasts/dino-park/issues'
        );


        foreach ($response->toArray() as $issue) {
            if (str_contains($issue['title'], $dinosaurName)) {
                $health = $this->getDinoStatusFromLabels($issue['labels']);
            }
        }


        $this->logger->info('Request Dino Issues', [
            'dino' => $dinosaurName,
            'responseStatus' => $response->getStatusCode(),
        ]);

        return $health;
    }

    private function getDinoStatusFromLabels(array $labels): string
    {
        $status = null;
        foreach ($labels as $label) {
            $label = $label['name'];
            // We only care about "Status" labels
            if (!str_starts_with($label, 'Status:')) {
                continue;
            }
            // Remove the "Status:" and whitespace from the label
            $status = trim(substr($label, strlen('Status:')));
        }
        return $status;
    }

}
