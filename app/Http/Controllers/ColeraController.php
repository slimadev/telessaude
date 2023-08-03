<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Services\ColeraService;

class ColeraController extends Controller
{

    public function index(){
        return view('colera_enfermagem', ['button_name' => ColeraService::NEXT_BUTTON_NAME,'button_previous_name'=>ColeraService::PREVIOUS_BUTTON_NAME, 'step' => 1]);
    }
 
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //view('colera_clinico', ColeraClinicoService::GET_PAGE_AND_CONTEXT($request));
        return view('colera_enfermagem', ColeraService::GET_PAGE_AND_CONTEXT($request));
    }

}
