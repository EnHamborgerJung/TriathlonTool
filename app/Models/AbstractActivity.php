<?php
namespace App\Models;
abstract class AbstractActivity
{
    /**
     * @var int|null
     */
    protected ?int $distance; // in kilometers

    /**
     * @var int|mixed|null
     */
    protected ?int $time;     // in seconds
    /**
     * @var mixed|null
     */
    protected $speed;    // in km/h

    /**
     * @param $distance
     * @param $time
     * @param $speed
     */
    public function __construct($distance = null, $time = null, $speed = null) {
        $this->distance = $distance;
        $this->time = $time;
        $this->speed = $speed;
    }

}

?>
