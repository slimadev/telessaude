<?php

namespace App\Http\Controllers;
use App\Http\Services\ColeraService;
use App\Models\SimpleEntity;
use Illuminate\Http\Request;

class MalariaController extends Controller
{
    public function calculo(){
        return view('malaria_calculo', ['step'=>1]);
    }

    public function do_calculo(Request $request){
        $tipo = $request->input('tipo');
        $peso = $request->input('peso');
        $via = $tipo == 1? "Via Endovenosa (IV)" : "Via Intra-muscular (IM)" ;
        $resultado = 0;

        if($peso<20){
            $resultado = $tipo == 1? $peso*0.3 : $peso*0.15 ;
        }else{
            $resultado = $tipo == 1? $peso*0.24 : $peso*0.12 ;
        }

        $province_id = $request->user()->province_id;
        $disease = SimpleEntity::whereCode('61')->first();

        ColeraService::ADD_TO_DASHBOARD('MALARIA', $province_id, $disease->id);

        return view('malaria_calculo', ['step'=>2,'via'=>$via,'peso'=>$peso,'resultado'=>$resultado]);
    }

    public function manejo(){
        return view('malaria_manejo');
    }
}
