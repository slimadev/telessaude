<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Http\Services\DashboardUserDTO;
use App\Http\Services\DashboardResumeDTO;
use App\Http\Services\DashboardService;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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

        print_r($total_dashboard);
        

    }
}
//"SUM(CASE WHEN balance_shoot < '0' THEN 1 ELSE 0 END) AS danger"