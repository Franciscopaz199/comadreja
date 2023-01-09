<?php

namespace App\Http\Controllers\apli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Uni;
use App\Models\User;
use App\Models\student;
use App\Models\carrera;
use App\Models\clase;

class studentController extends Controller
{
    //
    public function selectuni()
    {
        if(auth()->user()->student[0]->uni == null)
        {
            return view('livewire.app.student.index', [
                'universidades' => Uni::all()
            ]);
        }
        else{
            return redirect()->route('selectcarrera');
        }
    }

    public function selectuniv(Request $request)
    {
        $request->validate([
            // validar que exista la universidad
            'unive' => 'required | exists:unis,id'
        ]);

        $universidad = $request->unive;
        // agregar la universidad al estudiante mediante la relacion uno a muchos
        $user = User::find(auth()->user()->id);
        $student = $user->student;
        $student[0]->uni = $universidad;
        $student[0]->save();
        return redirect()->route('selectcarrera' );
    }

    public function selectcarrera()
    {
        if(auth()->user()->student[0]->carrera == null)
        {
        return view('livewire.app.student.selecarrera', [
            'carreras' => Uni::find(auth()->user()->student[0]->uni)->carreras,
            'universidad' => Uni::find(auth()->user()->student[0]->uni)
        ]);
        }else{
            return redirect()->route('selectclases');
        }
    }

    public function selectcarrer(Request $request)
    {
        $request->validate([
            // validar que exista la carrera
            'carrera' => 'required | exists:carreras,id'
        ]);

        $carrera = $request->carrera;
        // agregar la carrera al estudiante mediante la relacion uno a muchos
        $user = User::find(auth()->user()->id);
        $student = $user->student;
        $student[0]->carrera = $carrera;
        $student[0]->save();
        
        return redirect()->route('selectclases');
    }


    public function selectclases()
    {
        if(auth()->user()->student[0]->status == null )
        {
            return view('livewire.app.student.selectclases.index', [
                'carrera' => auth()->user()->student[0]->carrer
            ]);
        }else{
            return redirect()->route('home');
        }
    }

    public function checkclase(Request $request)
    {
        auth()->user()->student[0]->status = true;
        auth()->user()->student[0]->save();

        foreach ($request->clase as $clase) {
            auth()->user()->student[0]->clases()->attach($clase);
        }

        return redirect()->route('home');
    }

    public function homeestudiante()
    {
        return view('livewire.app.student.home.home');
    }


    



}
