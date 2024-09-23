<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Triathlon extends Model
{
    public function createTriathlon($input)
    {
        $this->activities = [
                ActivitySwim::create($input['inputSwim']),
                new ActivityTransition($activity['inputTransitionOne']['time']),
                new ActivityBike($activity['inputBike']['distance'], $activity['inputBike']['time']),
                new ActivityTransition($activity['inputTransitionTow']['time']),
                new ActivityRun($activity['inputRun']['distance'], $activity['inputRun']['time']),
            ];


    }



}
