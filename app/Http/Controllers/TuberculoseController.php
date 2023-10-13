<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\ColeraService;
use App\Models\SimpleEntity;

class TuberculoseController extends Controller
{
    public function manejo_ca(Request $request){
        //self::update_dashboard($request);
        return view('tuberculose_manejo_crianca_adolescente', ['step'=>1]);
    }

    public function tratamento_curativo(Request $request){
        self::update_dashboard($request);
        return view('tuberculose_tratamento_curativo', ['step'=>1]);
    }

    public function tratamento_preventivo(Request $request){
        //self::update_dashboard($request);
        return view('tuberculose_tratamento_preventivo', ['step'=>1]);
    }

    public function user_dashboard(Request $request){
        $dash =1;
        $province_id = $request->user()->province_id;
        $disease = SimpleEntity::whereCode('62')->first();
        ColeraService::ADD_TO_DASHBOARD('TUBERCULOSE', $province_id, $disease->id);
        return $dash;
    }

    private function update_dashboard(Request $request){
        $province_id = $request->user()->province_id;
        $disease = SimpleEntity::whereCode('62')->first();
        ColeraService::ADD_TO_DASHBOARD('TUBERCULOSE', $province_id, $disease->id);
    }
}
