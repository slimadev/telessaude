<?php

namespace App\Http\Services;


class FrequencyDTO
{
    public int $min;
    public int $max;
    public int $months;

    public function __construct(int $min, int $max = 0, $months=0) {
        $this->min = $min;
        $this->max = $max;
        $this->months =$months;
    }
    
}

?>
