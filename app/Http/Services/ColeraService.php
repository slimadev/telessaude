<?php

namespace App\Http\Services;
use App\Http\Services\FrequencyDTO;
use App\Models\Dashbord;


class ColeraService
{
    const NEXT_BUTTON_NAME = "Próximo";
    const PREVIOUS_BUTTON_NAME = "Anterior";
    const SUBMIT_BUTTON_NAME = "Submeter";
    const STEP_ZERO = 0;
    const STEP_ONE = 1;
    const STEP_TWO_CHILD = 21;
    const STEP_TWO_ADULT = 22;
    const STEP_TREE = 3;
    const STEP_FINAL = 4;

    public static function  ADD_TO_DASHBOARD($description, $province_id, $disease_id){
        Dashbord::create([
            'description' => $description,
            'province_id' => $province_id,
            'disease_id' => $disease_id
        ]);
    }
    public static function  IS_CHILD($age_type, $age){
        if($age_type ==1){
            return $age < 15;
        }
        return $age < 169;
    }

    public static function  NEXT_STEP($current_step, $is_child, $months, $hart_rate, $respiratory_rate){
        if($current_step ==self::STEP_ZERO){
            return self::STEP_ONE;
        }
        if($current_step ==self::STEP_ONE && $is_child){
            return self::STEP_TWO_CHILD;
        }

        return self::STEP_TREE;
    }

    public static function  GET_HART_RATE($age_type, $age){
        $months = $age_type ==1 ? $age*12 : $age;

        if($months < 11){
            return new FrequencyDTO(70, 170,$months);
        }
        if($months < 24){
            return new FrequencyDTO(80, 160,$months);
        }
        if($months == 24){
            return new FrequencyDTO(80, 130,$months);
        }

        return new FrequencyDTO(80, 120, $months);
    }

    public static function  GET_RESPIRATORY_RATE($age_type, $age){
        $months = $age_type ==1 ? $age*12 : $age;
        if($months < 11){
            return new FrequencyDTO(30, 50, $months);
        }
        if($months < 24){
            return new FrequencyDTO(26, 40, $months);
        }
        if($months == 24){
            return new FrequencyDTO(20, 30, $months);
        }

        return new FrequencyDTO(20, 30, $months);
    }

    public static function  ANORMAL_HART_RATE($months , $rate){
        if($months < 3 ){
            return $rate < 100 || $rate > 180;
        }
        if($months < 13 ){
            return $rate < 90 || $rate > 180;
        }
        if($months < 25 ){
            return $rate < 90 || $rate > 150;
        }
        if($months < 169 ){
            return $rate < 80 || $rate > 140;
        }

        return False;
    }

    public static function  ANORMAL_RESPIRATORY_RATE($months , $rate){
        if($months < 3 ){
            return  $rate > 60;
        }
        if($months < 13 ){
            return  $rate > 50;
        }
        if($months < 169 ){
            return  $rate > 40;
        }
        return False;
    }

    public static function  HAS_ANORMAL_RATE($months , $hart_rate, $respiratory_rate){
        return self::ANORMAL_HART_RATE($months , $hart_rate) || self::ANORMAL_RESPIRATORY_RATE($months , $respiratory_rate);
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
    public static function  HAS_ANORMAL_SIGNAL($months , $hart_rate, $respiratory_rate){
        return self::ANORMAL_HART_RATE($months , $hart_rate) || self::ANORMAL_RESPIRATORY_RATE($months , $respiratory_rate);
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

        return ($st3_digestoes == 3
             || $st3_vomitos == 4
                || $st3_urina == 3
                || $st3_mental == 3
    );

    }



    
}

?>
