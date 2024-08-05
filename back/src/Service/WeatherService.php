<?php


namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class WeatherService
{
    public function __construct(private HttpClientInterface $client, private string $apiKey)
    {
        $this->client = $client;
        $this->apiKey = $apiKey;
    }

    public function getWeather(string $city): array | string
    {
        try {
            $response = $this->client->request(
                'GET',
                'https://api.openweathermap.org/data/2.5/weather?',
                [
                    'query' => [
                        'q' => $city,
                        'appid' => $this->apiKey,
                        'units' => 'metric',
                        'lang' => 'fr'
                    ]
                ]
            );
            return $response->toArray();
        } catch (\Exception $e) {
            return $e;
        }
    }

    
}
