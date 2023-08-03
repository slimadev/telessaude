<?php

namespace App\Http\Services;
use App\Http\Services\DashboardDTO;

class DashboardResumeDTO
{
    public  $total_dashboard;
    public  $months_dashboard;

    public function __construct($total_dashboard, $months_dashboard) {
        $this->total_dashboard = $total_dashboard;
        $this->months_dashboard =$months_dashboard;
    }
    
}

?>
