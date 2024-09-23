<?php

namespace App\Models;

class ActivitySwim extends AbstractActivities
{
    protected $fillable = ['triathlon_id', 'distance', 'time', 'pace',];
/* Funktionen
Alle Variabeln setzten
Wenn keine Pace dann Pace aus time und distsance errechenn
Wenn keine Zeit dann Zeit aus Pace und Distance errechnen
*/
    public static function createSwim($triathlon_id, $distance, $time = null, $pace = null)
    {
        if (!$time && !$pace) {
            return null;
        }

        if (!$time) {
            $time = self::calculateTime($pace, $distance);
        } elseif (!$pace) {
            $pace = self::calculatePace($time, $distance);
        }

        return self::create([
            'triathlon_id' => $triathlon_id,
            'distance' => $distance,
            'time' => $time,
            'pace' => $pace,
        ]);
    }

    public function calculatePace($time, $distance): float|int
    {
        return $time / $distance * 100;

    }
    public function calculateTime($pace, $distance): float|int
    {
        return $distance * $pace;
    }




}
