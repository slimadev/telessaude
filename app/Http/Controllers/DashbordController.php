<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\DashboardService;

class DashbordController extends Controller
{
    public function statistic(){
        $dash = new DashboardService();
        return view('usage_statistics',['provincies_dashboard'=>$dash->GET_PROVINCIES_DASHBOARD()]);
    }

    public function users(){
        return view('user_statistics');
    }

    public function buildDashboard($year){
        $dash = new DashboardService();
        //$dto = $dash->BUILD_DASHBOARD();
        return response()->json($dash->BUILD_DASHBOARD($year));
        
    }

    public function buildUsersDashboard(){
        $dash = new DashboardService();
        return response()->json($dash->GET_USERS_DASHBOARD());
        
    }
}
