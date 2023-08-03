<?php

namespace App\Http\Services;


class DashboardDTO
{
    public string $description;
    public int $colera;
    public int $malaria;
    public int $tuberculose;
    public int $month;

    public function __construct($description='NA',int $colera=0, int $malaria = 0,$tuberculose=0, $month=0) {
        $this->description = $description;
        $this->colera = $colera;
        $this->malaria =$malaria;
        $this->tuberculose =$tuberculose;
        $this->month =$month;
    }
    
}

?>
