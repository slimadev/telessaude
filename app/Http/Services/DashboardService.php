<?php

namespace App\Http\Services;
use App\Models\Dashbord;
use Illuminate\Support\Facades\DB;
use App\Http\Services\DashboardDTO;
use App\Http\Services\DashboardUserDTO;
use App\Http\Services\DashboardResumeDTO;


class DashboardService
{
    public function  BUILD_DASHBOARD(){
        $total_dashboard = new DashboardDTO('NA',0, 0,0, 0);

        $currentMonth = date('m');
        $new_months_dashboard = array();;
        
        $months_dashboard = DB::table("dashbords as dsb")
                    ->whereRaw('MONTH(dsb.created_at) <= ?',[$currentMonth])
                    ->selectRaw('MONTH(dsb.created_at) as month')
                    ->selectRaw("count(case when dsb.description = 'COLERA' then 1 end) as colera")
                    ->selectRaw("count(case when dsb.description = 'MALARIA' then 1 end) as malaria")
                    ->selectRaw("count(case when dsb.description = 'TUBERCULOSE' then 1 end) as tuberculose")
                    ->groupBy("month")
                    ->get();

        
        for ($i = 1; $i <= $currentMonth; $i++) {
            $month_dashboard = new DashboardDTO('NA',0, 0,0, $i);
            foreach ($months_dashboard as &$result) {
                if($i==$result->month){
                    $month_dashboard ->colera = $result->colera;
                    $month_dashboard ->malaria = $result->malaria;
                    $month_dashboard ->tuberculose = $result->tuberculose;

                    $total_dashboard ->colera = $total_dashboard ->colera+$result->colera;
                    $total_dashboard ->malaria = $total_dashboard ->malaria+$result->malaria;
                    $total_dashboard ->tuberculose = $total_dashboard ->tuberculose +$result->tuberculose;
                    
                }
            }
            $new_months_dashboard[] = $month_dashboard;
        }

        return new DashboardResumeDTO($total_dashboard, $new_months_dashboard);

    }

    public function  GET_PROVINCIES_DASHBOARD(){
        return DB::table('simple_entities as sep')
            ->leftJoin('dashbords as dsb', 'sep.id', '=', 'dsb.province_id')
            ->where('sep.type', '=', 'PROVINCIA')
            ->selectRaw('sep.descrption')
            ->selectRaw("count(case when dsb.description = 'COLERA' then 1 end) as colera")
            ->selectRaw("count(case when dsb.description = 'MALARIA' then 1 end) as malaria")
            ->selectRaw("count(case when dsb.description = 'TUBERCULOSE' then 1 end) as tuberculose")
            ->groupBy("sep.descrption")
            ->get();
    }

    public function  GET_USERS_DASHBOARD(){

        $total_dashboard = new DashboardUserDTO(0,  0,0, 0);
        $new_users_dashboard=  DB::table('simple_entities as sep')
                ->leftJoin('users as us', 'sep.id', '=', 'us.province_id')
                ->leftJoin('simple_entities as frame', 'frame.id', '=', 'us.framing_id')
                ->where('sep.type', '=', 'PROVINCIA')
                ->selectRaw('sep.descrption')
                ->selectRaw("count(case when frame.code = '20' then 1 end) as professional")
                ->selectRaw("count(case when frame.code = '21' then 1 end) as parceiro")
                ->selectRaw("count(case when frame.code = '22' then 1 end) as docente")
                ->selectRaw("count(case when frame.code = '23' then 1 end) as estudante")
                ->groupBy("sep.descrption")
                ->get();

        foreach ($new_users_dashboard as &$result) {
            $total_dashboard ->professional = $total_dashboard ->professional+$result->professional;
            $total_dashboard ->parceiro = $total_dashboard ->parceiro+$result->parceiro;
            $total_dashboard ->docente = $total_dashboard ->docente +$result->docente;
            $total_dashboard ->estudante = $total_dashboard ->estudante +$result->estudante;
        }

        
        return new DashboardResumeDTO($total_dashboard, $new_users_dashboard);
    }
    
}

?>
