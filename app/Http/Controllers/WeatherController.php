<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class WeatherController extends Controller
{
    function weather($location){
        //return $location;
        $weatherDetails = Http::get("https://wttr.in/{$location}?format=j1")->json();
        $currentTemp = $weatherDetails["current_condition"][0]["temp_C"];
        $currentCondition = $weatherDetails["current_condition"][0]["weatherDesc"][0]["value"];
        return view("weather", compact("currentTemp","currentCondition","location"));


    }
}
