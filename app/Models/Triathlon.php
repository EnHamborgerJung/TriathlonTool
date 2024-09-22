<?php

namespace App\Models;

class Triathlon
{
    private $swim;
    private $run;
    private $bike;

    public function __construct(ActivitySwim $swim, ActivityBike $bike, ActivityRun $run) {
        $this->swim = $swim;
        $this->bike = $bike;
        $this->run = $run;
    }


}


