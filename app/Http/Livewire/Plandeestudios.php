<?php

namespace App\Http\Livewire;


use App\Models\Clase;
use App\Models\Carrera;
use App\Models\Student;
use App\Models\User;
use App\Http\Controllers\librerias\lib;
use Livewire\Component;

class Plandeestudios extends Component
{
    public $cant = 3;
    public $clasesperiodo1 = [];
    public $opcion = 1;
    public $periodo2 = [];
    public $periodosrestantes = 0;
    public $clases_restantes = 0;
    public $totalUV = 0;
    public $showModal = false;
    public $salida = " ";
    public $fechaactual = " ";
    public $restantes = 0;

    public function mount()
    {
        $lib = new lib();
        $this->clasesperiodo1 = $lib->get_plan_estudio($this->cant)["periodos"];
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.plandeestudios');
    }

    public function setcantClases($cantidad)
    {   
        $this->cant = $cantidad;
        $lib = new lib();
        $this->clasesperiodo1 = $lib->get_plan_estudio($cantidad)["periodos"];
        $this->opcion = 1;
    }

    public function setopcion($opcion)
    {
        $lib = new lib();
        if($opcion == 1 )
        {
            $this->clasesperiodo1 = $lib->get_plan_estudio($this->cant)["periodos"];
        }
        $this->periodosrestantes = count($this->clasesperiodo1);
        $this->clases_restantes = auth()->user()->student->carrer->puente->count() - auth()->user()->student->clases->count();
        $this->totalUV = $lib->get_plan_estudio($this->cant)["UV"];
       
        $this->salida = $lib->get_plan_estudio($this->cant)["periodos"][count($this->clasesperiodo1) - 1]["anio"];
        
        
        $this->fechaactual = date('d-m-Y');
        $this->restantes = $this->getRestantes();

        $this->opcion = $opcion;
    }

    public function openModal()
    {
        // actualizar la lista de clases del periodo actual
        $lib = new lib();
        $this->periodo2 = $lib->get_plan_estudio($this->cant)["periodos"];
        $this->opcion = 3;
    }

    public function getRestantes(){
        $string = "";
        if(intval($this->periodosrestantes/3) != 0   && ($this->periodosrestantes%3) != 0)
        {
            if(intval($this->periodosrestantes/3) == 1)
            {
                $string = intval($this->periodosrestantes/3)." Año";
            }else{
                $string = intval($this->periodosrestantes/3)." Años";
            }
            if(($this->periodosrestantes%3) == 1)
            {
                $string = $string." y ".intval($this->periodosrestantes%3)." Periodo";
            }else{
                $string = $string." y ".intval($this->periodosrestantes%3)." Periodos";
            }
        }
        else if(intval($this->periodosrestantes/3) == 0)
        {
            if(($this->periodosrestantes%3) == 1)
            {
                $string = intval($this->periodosrestantes%3)." Periodo";
            }else{
                $string = intval($this->periodosrestantes%3)." Periodos";
            }

        }else if(($this->periodosrestantes%3) == 0){
            if(intval($this->periodosrestantes/3) == 1)
            {
                $string = intval($this->periodosrestantes/3)." Año";
            }else{
                $string = intval($this->periodosrestantes/3)." Años";
            }
        }
        return $string;



    }
}
