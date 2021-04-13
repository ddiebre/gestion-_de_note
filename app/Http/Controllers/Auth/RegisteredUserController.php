<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('superdash');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'statut' => 'string|max:255',
            'matiere1' => 'string|max:255',
            'matiere2' => 'string|max:255',
            'classe' => 'string|max:255',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'statut' => $request->statut,
            'matiere1' => $request->matiere1,
            'matiere2' => $request->matiere2,
            'classe' => $request->classe,



        ]);
        $user->attachRole($request->role_id);
        event(new Registered($user));

        // return redirect(RouteServiceProvider::HOME);
        return view('dashboard');
    }

        // public function registe(Request $request){
        //     $niveau = $request->input('niveau');
        //     $name = $request->input('name');

        //     DB::insert('insert into classes (niveau,name) values (?, ? )', [$niveau, $name]);
        //     return redirect('dashboard');
        // }

}
