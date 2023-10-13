<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\SimpleEntity;
use App\Models\User;
use App\Models\ProfessionalCategory;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $cat_id=$request->input("categoria_id");

     
        $provincies = SimpleEntity::where('type', 'PROVINCIA')->get();
        $frames = SimpleEntity::where('type', 'ENQUADRAMENTO')->get();
        $categories = SimpleEntity::where('type', 'CATEGORIA')->get();
        $pro_categories = ProfessionalCategory::where('area_id', $cat_id)->get();

        return view('profile.edit', [
            'user' => $request->user(),
            'provincies'=>$provincies,
            'frames'=>$frames,
            'categories'=>$categories,
            'pro_categories'=>$pro_categories,
        ]);
    }


    public function cat($area_id)
    {
        $categories = ProfessionalCategory::where('area_id',$area_id)->get(); 
        return $categories;
    }

    /**
     * Update the user's profile information.
     */
 

    /**
     * Delete the user's account.
     */

     public function update(Request $request): RedirectResponse
     {
        $framing = SimpleEntity::where('code', $request->input('framing_code'))->first();

         $user = User::where('id', $request->input('uid'))->first();
         
       
            $user->name = $request->input('name');
            $user->framing_id=$framing->id;
            $user->email = $request->input('email');
            $user->province_id = $request->input('province_id');
           
            $user->category_id = $request->input('ocupacao');
            $user->nuit = $request->input('nuit');

           

        
        $user->save();
 
         return Redirect::route('profile.edit')->with('Dados alterados com sucesso!');
     }


    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
