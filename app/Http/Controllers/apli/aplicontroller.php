<?php

namespace App\Http\Controllers\apli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\student;
use Illuminate\Support\Facades\Auth;


class aplicontroller extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function login()
    {
        if (auth()->check()) {
            return redirect()->route('selectuni');
        }
        return view('login.login');
    }

    public function register()
    {
        if (auth()->check()) {
            return redirect()->route('selectuni');
        }
        return view('login.register');
    }


    // funcion para crear un usuario y un estudiante
    public function create(Request $request)
    {
        // validacion de los datos del formulario de registro
        $request->validate([
            'name' => 'required',
            'email' => ' required|email|unique:users,email|ends_with:@unah.edu.hn,@unah.hn',
            'password' => 'required | min:8 ',
            'cuenta' => 'required|min:11|max:11|unique:students,accountnumber' 
        ]);

        // creamos el usuario y el estudiante
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        
        $user->student()->create([
            'accountnumber' => $request->cuenta,
        ]);

        // despues de crear el usuario, iniciamos sesion
        auth()->login($user);
        return redirect()->route('selectuni');
    }

    public function iniciar(Request $request)
    {
        
        // validacion de los datos del formulario de inicio de sesion
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // intentamos iniciar sesion
        if (Auth::attempt($credentials)) {
            // si se inicia sesion correctamente, redirigimos al usuario a la pagina de inicio
            $request->session()->regenerate();
            return redirect(route('home'));
        }

        // si no se inicia sesion correctamente, redirigimos al usuario a la pagina de inicio de sesion
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }


    public function logout()
    {
        auth()->logout();
        return redirect()->route('apli');
    }

}

