<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Weather extends BaseController
{
    public function index()
    {
        return view('weather_form');
    }

    public function getWeather()
    {
        $city = $this->request->getPost('city');
        $apiKey = getenv('openweathermap.apiKey');
        // dd($city, $apiKey);

        $encodedCity = urlencode($city);
        $apiUrl = "http://api.openweathermap.org/data/2.5/weather?q={$encodedCity}&appid={$apiKey}&units=metric&lang=ja";

        $client = \Config\Services::curlrequest();
        try {
            $response = $client->get($apiUrl);
            $data = json_decode($response->getBody(), true);
            // dd($data);

            if ($data['cod'] === 200) {
                return view('weather_result', ['weather' => $data]);
            } else {
                return view('weather_form', ['error' => $data['message']]);
            }
        } catch (\Exception $e) {
            return view('weather_form', ['error' => 'APIリクエスト中にエラーが発生しました。']);
        }
    }
}
