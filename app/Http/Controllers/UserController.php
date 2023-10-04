<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SimpleEntity;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Mail;
use Illuminate\Support\Facades\Hash;

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

   public function reset(){
    return view("reset");
   }

   public function resetPost(Request $request){
      

       
              $request->validate([
                'email'=>"required|email|exists:users",
              ]);
              $tokOld=DB::table("password_reset_tokens")->where('email',$request->input('email'))->value('token');
              $tokenNew=Str::random(64);
              $token="";

              if($tokOld!=null||$tokOld!=""){
                $token=$tokOld;
              }else{
                $token= $tokenNew;
                DB::table("password_reset_tokens")->insert([
                  'email'=>$request->input('email'),
                  'token'=>$token,
                  'created_at'=>Carbon::now()
                  ]);
              
              }
              $name=DB::table("users")->where('email',$request->input('email'))->value('name');
              error_log($name);
              $nameArray=explode(" ",$name);
              $firstName=$nameArray[0];

            try{
                Mail::send("emails.forget-password",['token'=>$token, 'email'=>$request->input('email'), 'name'=>$firstName], function($message) use ($request){
              
                  $message->to($request->input('email'));
                  $message->subject("Aplicativo Teleconsultas - alteração da senha");
                });

              }catch(Exception $e){
                return redirect()->to(route("reset_password"))->with("messageerror", "Não foi possível enviar o pedido de alteração da senha para o e-mail. Verifica a sua conexão de internet".$e->getMessage());
              }

                return redirect()->to(route("reset_password"))->with("message", "Foram enviadas ao seu email instruções para redefinição da senha. Aceda o seu email para proceder com a alteração");
           
        }
   
   function resetPostMail($token,$email){


    return view("new-password", compact("token","email"));
   }

   function resetPasswordPost(Request $request){
     // $request->validate([
       // "email"=>"required|email|exists:users",
      //  "password"=>"required|string|min:6|confirmed",
      //  "r_password"=>"required"
     // ]);

   

      $updatePassword=DB::table("password_reset_tokens")
                                ->where([
                                  "email"=>$request->input("email"),
                                  "token"=>$request->input("token")
                                ])->first();
                    if(!$updatePassword){
                    
                      return redirect()->to(route("login"))->with("messageerror", "Por favor faça um novo pedido de alteração da senha");
                    }else{
                     
                      User::where("email",$request->email)
                      ->update(["password"=>Hash::make($request->password)]);

                      DB::table("password_reset_tokens")->where("email", $request->email)->delete();
                      return redirect()->to(route("login"))->with("message", "Senha alterada com sucesso!");
                    }
   }
}
