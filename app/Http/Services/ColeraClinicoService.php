<?php

namespace App\Http\Services;
use App\Http\Services\FrequencyDTO;
use App\Models\SimpleEntity;
use App\Http\Services\ColeraService;
use App\Models\Dashbord;


class ColeraClinicoService
{
    const SUBMIT_BUTTON_NAME = "Submeter";

    public static function  ADD_TO_DASHBOARD($description, $province_id, $disease_id){
        Dashbord::create([
            'description' => $description,
            'province_id' => $province_id,
            'disease_id' => $disease_id
        ]);
    }

    public static function  GET_PAGE_AND_CONTEXT($request){
        $has_anormal_signal = $request->input('has_anormal_signal');
        $has_anormal_rate = $request->input('has_anormal_rate');
        $has_anormal_step_3 = self::HAS_ANORMAL_SIGNAL_IN_STEP_3($request);
        $is_child = $request->input('is_child');
        $has_pregnant= $request->input('has_pregnant');
        $all_filled_data = $request->input('all_filled_data');

        $all_filled_data_array = json_decode($all_filled_data, true);
        
        $next_step = 41;
        if($has_anormal_signal==0 && $has_anormal_step_3){
            $next_step = 42;
        }

        if($has_anormal_signal==1 && ($has_anormal_rate==1 || $has_anormal_step_3)){
            $next_step = 43;
        }

        $province_id = $request->user()->province_id;
        $disease = SimpleEntity::whereCode('60')->first();

        self::ADD_TO_DASHBOARD('COLERA', $province_id, $disease->id);
        return ['step' => $next_step,
                'is_child'=>$is_child,
                'has_pregnant'=>$has_pregnant,
                'button_name' => self::SUBMIT_BUTTON_NAME,
                'all_filled_data'=>$all_filled_data_array
            ];
    }

    public static function  HAS_ANORMAL_SIGNAL_IN_STEP_3($request){
        $st3_digestoes = $request->input('st3_digestoes');
        $st3_vomitos= $request->input('st3_vomitos');
        $st3_urina= $request->input('st3_urina');
        $st3_mental= $request->input('st3_mental');
        $st3_pulso= $request->input('st3_pulso');
        $st3_olhos= $request->input('st3_olhos');
        $st3_respiracao= $request->input('st3_respiracao');
        $st1_cutanea= $request->input('st1_cutanea');
        $has_pregnant= $request->input('has_pregnant');
        $has_pregnant_anormal_signal = 0;

        if($has_pregnant == 1){
            $arterial_value = $request->input('arterial_value');
            $braquial_value = $request->input('braquial_value');
            if($arterial_value < 95){
                $has_pregnant_anormal_signal = 1;
            }
        }
        

        return ($st3_digestoes == 3
             || $st3_vomitos == 4
                || $st3_urina == 3
                || $st3_mental == 3
                || $has_pregnant_anormal_signal = 1
    );

    }

    
}

?>
