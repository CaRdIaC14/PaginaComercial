<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function register(Request $request){


        $request->validate([
            'correo' => 'required|unique:users,correo',
        ]);

        $user = new User();

        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->password = hash::make($request->password);
        $user->correo =$request->correo;
        $user->save();

        Auth::login($user);
        return redirect()->route('dashboard');
    }

    public function loginVerify (Request $request){
        
        $credenciales = [
                'correo' => $request->correo,
                'password' => $request->password
        ];
        
        // $remember = ($request->has('remember') ? true : false);
        if(Auth::attempt($credenciales)){
            // $request-> session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors(['invalid_credentials'=> 'Correo o contrasena no valido'])->withInput();
    }

    public function singOut(){
        Auth::logout();
        return redirect()->route('welcome');
    }

}
