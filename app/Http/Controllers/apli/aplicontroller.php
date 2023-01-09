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
        return view('livewire.app.index.index');
    }

    public function login()
    {
        if (auth()->check()) {
            return redirect()->route('selectuni');
        }
        return view('livewire.app.index.login');
    }

    public function register()
    {
        if (auth()->check()) {
            return redirect()->route('selectuni');
        }

        return view('livewire.app.index.register');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required | email ',
            'password' => 'required',
            'cuenta' => 'required' 
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        $student = new student();
        $student->accountnumber = $request->cuenta;
        $student->user = $user->id;
        $student->save();

        // despues de crear el usuario, iniciamos sesion
        auth()->login($user);
        return redirect()->route('selectuni');
    }

    public function iniciar(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            return redirect()->route('selectuni');
        }
        return redirect()->route('apli');
    }


    public function logout()
    {
        auth()->logout();
        return redirect()->route('apli');
    }
}

