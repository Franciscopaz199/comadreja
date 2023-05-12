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
    public $cuenta_periodo = 1;
    public $lista_pasadas;
    public $clases_carrera = [];
    public $cantperiodos;
    public $UVrestantes = 0;
    public $anio; 
    public $periodo;
    public $periodos = [];

    // funcion para obtener el plan de estudio del estudiante
    public function get_plan_estudio($cant)
    {
        $this->lista_pasadas = auth()->user()->student->clases;
        $this->clases_carrera = auth()->user()->student->carrer->puente->sortByDesc('prioridad');
        $this->cant = $cant;
        $this->anio = date('Y');
        $this->periodo = (date('m') % 4) + 1;

        return $this->bucle();
    }

    private function bucle()
    {

        while(count($this->lista_pasadas) < count($this->clases_carrera))
        {
            array_push($this->periodos, $this->obtener_clases_periodo());
        }

        $enviar = [
            'periodos' => $this->periodos,
            'cant' => count($this->periodos),
            'UV' => $this->UVrestantes,
        ];


        return $enviar;

        
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
                        $this->UVrestantes += $puente->clase->UV;
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
            'periodo' => $this->cuenta_periodo++,
            'clases' => $clases,
            'uv' => $uv,
            'cant' => count($clases),
            'promedio' => $this->get_promedio_necesario($uv),
            'anio' => $this->get_periodo(),
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

    // funcion para obtener el promedio necesario para cursar lo que le falta
    public function get_promedio_necesario($unidadV)
    {
        if($unidadV <= 10)
        {
            return '40% '; // - 59%
        }
        else if($unidadV <= 12)
        {
            return '60%'; // - 69%
        }
        else if($unidadV <= 16)
        {
            return '70% '; // - 79%
        }
        else if($unidadV <= 20)
        {
            return '80%'; // - 89%
        }
        else if($unidadV <= 25)
        {
            return '90%'; // - 100%
        }
    }   

    public function get_periodo()
    {
        if($this->periodos == [] && $this->periodo == 3)
        {
            $this->anio++;
            $this->periodo = 1;
        }else if($this->periodos == [])
        {
            $this->periodo++;
        }

        $string = '';
        if($this->periodo == 1)
        {
            $string = 'I-PAC '.$this->anio;
            $this->periodo++;
        }
        else if($this->periodo == 2)
        {
            $string = 'II-PAC '.$this->anio;
            $this->periodo++;
        }
        else if($this->periodo == 3)
        {
            $string = 'III-PAC '.$this->anio;
            $this->periodo = 1;
            $this->anio++;
        }
        return $string;
    }

}
