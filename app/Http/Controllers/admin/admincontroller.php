<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Uni;
use App\Models\User;
use App\Models\student;
use App\Models\carrera;
use App\Models\clase;

class admincontroller extends Controller
{
   

    public function clasesquepuedelleva()
    {       
        // eliminar las clases que puede llevar el estudiante
        auth()->user()->student->clasesdisponibles()->detach();
        $this->findclases();
    }

    // funcion para encontrar las clases que puede llevar el estudiante
    public function findclases()
    {
        // obtener todas las clases de la carrera del estudiante
        $allclases = auth()->user()->student->carrer->puente;

        // recorrer todas las clases de la carrera del estudiante
        foreach ($allclases as $clase) {
            if($this->condicion($clase)){
                auth()->user()->student->clasesdisponibles()->attach($clase->id, ['clase_id' => $clase->clase->id]);
            }
        }
    }

    public function condicion($clase)
    {
        if(!$this->busqueda($clase))
        {
            foreach ($clase->requisitos as $requisito) {
                $carrera = auth()->user()->student->carrer;
                $requisito = $carrera->puente()->where('clases_id', $requisito->id)->first();
                if(!$this->busqueda($requisito)){
                    return false;
                }
            }
            return true;
        }
        return false;
    }

    public function busqueda($clase)
    {
        foreach (auth()->user()->student->clases as $clasepasada) {
            if($clasepasada->id === $clase->clase->id){
                return true;
            }
        }
        return false;
    }

    
}
