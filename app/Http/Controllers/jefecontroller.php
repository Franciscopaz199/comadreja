<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\student;
use Illuminate\Support\Facades\Auth;
class jefecontroller extends Controller
{

    public function homejefe()
    {
        return view('jefe.homejefe',[
            'deparatamento' =>  auth()->user()->jefe->departamento->name,
            'universidad' => auth()->user()->jefe->uni->name,     
            'nombrecorto' => auth()->user()->jefe->uni->shortname,                                       
        ]);
    }


}
