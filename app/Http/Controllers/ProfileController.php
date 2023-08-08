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
        $provincies = SimpleEntity::where('type', 'PROVINCIA')->get();
        $frames = SimpleEntity::where('type', 'ENQUADRAMENTO')->get();
        $categories = SimpleEntity::where('type', 'CATEGORIA')->get();

        return view('profile.edit', [
            'user' => $request->user(),
            'provincies'=>$provincies,
            'frames'=>$frames,
            'categories'=>$categories,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    /** 
    public function update(ProfileUpdateRequest $request, Request $req): RedirectResponse
    {
        $framing = SimpleEntity::where('code', $req->input('framing_code'))->first();
        error_log("id=============");
        $request->user()->fill($request->validated());
       $request->user()->framing_id=$framing->id;

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

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
            $user->category_id = $request->input('category_id');
            $user->nuit = $request->input('nuit');

           

        
        $user->save();
 
         return Redirect::route('profile.edit')->with('message', 'profile-updated');
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
