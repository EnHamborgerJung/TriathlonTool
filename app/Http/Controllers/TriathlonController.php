<?php

namespace App\Http\Controllers;

use App\Models\Triathlon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TriathlonController extends Controller
{
    public function input(): Triathlon
    {
        $input = [
            'inputSwim' => [
                'distance' => 1500,       /* meter*/
                'time' => '1687',     /* 28:07min*/
//                  'pace' =>       ' ',        /* Pace in 100m/zeit*/
            ],
            'inputTransitionOne' => [
                'time' => '180' /* 03:00min*/
            ],
            'inputBike' => [
                'distance' => 40000, /* 40km*/
                'time' => '1687', /* 28:07min*/
//                  'pace' =>       ' ',        /* Pace in 100m/zeit*/
            ],
            'inputTransitionTow' => [
                'time' => '180' /* 03:00min*/
            ],
            'inputRun' => [
                'distance' => 10000, /* 10km*/
                'time' => '3215', /* 52:05min*/
//                  'pace' =>       ' ',        /* Pace in 100m/zeit*/

            ],
        ];

        $triathlon = Triathlon::createTriathlon($input);


        return $this->output($triathlon);
    }

    public function output(Triathlon $triathlon)
    {
        return Inertia::render('Triathlon', [
            'item' => $triathlon
        ]);
    }

}
