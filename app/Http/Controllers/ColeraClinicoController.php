<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\ColeraService;
use App\Http\Services\ColeraClinicoService;


class ColeraClinicoController extends Controller
{
    public function index(){
        return view('colera_clinico', ['button_name' => ColeraService::NEXT_BUTTON_NAME,'button_previous_name'=>ColeraService::PREVIOUS_BUTTON_NAME, 'step' => 1]);
    }

    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        return view('colera_clinico', ColeraClinicoService::GET_PAGE_AND_CONTEXT($request));
    }

    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store_via_ajax(Request $request)
    {
        return view('colera_clinico');
    }
}
