<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\SimpleEntity;
use App\Models\ProfessionalCategory;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $provincies = SimpleEntity::where('type', 'PROVINCIA')->get();
        $frames = SimpleEntity::where('type', 'ENQUADRAMENTO')->get();
        $categories = SimpleEntity::where('type', 'CATEGORIA')->get();

        return view('auth.register',['provincies'=>$provincies,
                                    'frames'=>$frames,
                                    'categories'=>$categories,]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ], [

            'email.unique' => 'Já existe utilizador com o email inserido.',
            'password.confirmed' => 'As senhas não conferem.'

        ]);

        $framing = SimpleEntity::where('code', $request->framing_code)->first();

        $new_user = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'framing_id'=> $framing->id,
            'province_id'=>$request->province_id
        ];

        if($framing->code=='20'){
            $new_user += [ 'category_id' => $request->category_id ];
            $new_user += [ 'nuit' => $request->nuit ];
        }

        $user = User::create($new_user);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function findCategoriesByAreaId($area_id){
        $categories = ProfessionalCategory::where('area_id',$area_id)->get(); 
        return $categories;
    }

   

}
