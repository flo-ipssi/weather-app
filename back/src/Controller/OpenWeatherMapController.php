<?php

namespace App\Controller;

use App\Service\WeatherService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OpenWeatherMapController extends AbstractController
{

    public function __construct(private WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    #[Route('/weather', name: 'app_weather')]
    public function index(): JsonResponse
    {
        // Default city : PARIS 
        
        try {
            $weatherData = $this->weatherService->getWeather('Paris');
        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()], 404);
        }
        return new JsonResponse($weatherData);
        // return $this->render('weather/index.html.twig', [
        //     'controller_name' => 'WeatherController',
        // ]);
    }
}
