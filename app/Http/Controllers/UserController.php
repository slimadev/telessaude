<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SimpleEntity;
use DB;

class UserController extends Controller
{
    public function index(){
        //$users =  User::all();
      $users=DB::table('users')
                            ->leftJoin('simple_entities', 'simple_entities.id','=','users.program_id')
                            ->select('users.id', 'users.is_admin', 'users.name', 'users.email', 'users.framing_id', 'simple_entities.descrption')
                            ->get();


                            

     
        //Document::where('type', 'PROVINCIA')->get();
        return view('users.list',['users'=>$users]);
    }

    public function show(Request $request)
    {
      $programs = SimpleEntity::where('type', 'PROGRAMA')->get();
      $user = User::find($request->input('id'));

    return view('users.show', ['user' => $user,'programs'=>$programs]);

    }

    public function update(Request $request){
      
        $userModel =User::find($request->input('id'));
        $userModel->is_admin = $request->input('rbProfile');

        if($userModel->is_admin==1 && $request->input('program_id')!=0){
            $userModel->program_id = $request->input('program_id');
        }
        $userModel->save();
        return redirect()->route('users.start')->with('message', 'Usuario Actualizado Com Sucesso!');
   }
}
