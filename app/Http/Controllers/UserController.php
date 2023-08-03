<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SimpleEntity;

class UserController extends Controller
{
    public function index(){
        $users =  User::all();
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
        return redirect()->route('users.start');
   }
}
