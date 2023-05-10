<?php

namespace App\Http\Controllers\admin;
use Illuminate\Database\Eloquent\Collection;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Uni;
use App\Models\User;
use App\Models\student;
use App\Models\carrera;
use App\Models\clase;


class lib extends Controller
{
    // obtener las clases que ha pasado el estudiante
    public $lista = [];
    public $lista_pasadas;
    public $clases_carrera = [];
    public $cantperiodos;
  

    // funcion para obtener el plan de estudio del estudiante
    public function get_plan_estudio($cant)
    {
        $this->lista_pasadas = auth()->user()->student->clases;
        $this->clases_carrera = auth()->user()->student->carrer->puente->sortByDesc('prioridad');
        $this->cant = $cant;
        $this->bucle();
        return $this->lista;
    }

    private function bucle()
    {
        while(count($this->lista_pasadas) < count($this->clases_carrera))
        {
            array_push($this->lista, $this->obtener_clases_periodo());
        }
        
    }

    private function obtener_clases_periodo()
    {
        // lista de clases que puede sacar el estudiante en el periodo actual
        $clases = [];
        $uv = 0;
        // recorrer las clases de la carrera
        foreach($this->clases_carrera as $puente)
        {
            $condicion = true;
            // no ha pasado la clase?
            if(!$this->comprobar_clase($puente->clase))
            {
                // si no la ha pasado, se comprueba si ya paso las clases necesarias para sacarla
                foreach($puente->requisitos as $requisito)
                {
                    // si no ha pasado el requisito, se sale del bucle
                    if(!$this->comprobar_clase($requisito))
                    {
                        $condicion = false;
                        break;
                    }
                }
                // si se cumple la condicion, se agrega la clase a la lista
                if($condicion)
                {
                    $uv += $puente->clase->UV;
                    if($uv <= 25)
                    {
                        array_push($clases, $puente);
                    }
                    else
                    {
                        $uv -= $puente->clase->UV;
                        break;
                    }
                }
            }

            // si la lista de clases es igual a la cantidad de clases que puede llevar el estudiante
            if(count($clases) == $this->cant)
            {
                break;
            }
        }

        foreach($clases as $clase)
        {
           $this->lista_pasadas->push($clase->clase);
           
        }

        $clases2 = [
            'periodo' =>  count($this->lista) + 1,
            'clases' => $clases,
            'uv' => $uv,
            'cant' => count($clases),
        ];

        return $clases2;
    }
    
    // esta funcion comprueba si el estudiante ya ha pasado la clase
    private function comprobar_clase($clase)
    {
        // recorrer las clases que ha pasado el estudiante
        foreach($this->lista_pasadas as $clase_pasada)
        {
            // si la clase pasada es igual a la clase que se esta comprobando
            if($clase_pasada->id == $clase->id)
            {
                return true;
            }
        }
        return false;
    }


}
