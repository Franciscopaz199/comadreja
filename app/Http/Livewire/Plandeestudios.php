<?php

namespace App\Http\Livewire;


use App\Models\Clase;
use App\Models\Carrera;
use App\Models\Student;
use App\Models\User;
use App\Http\Controllers\admin\lib;
use Livewire\Component;

class Plandeestudios extends Component
{
    public $cant = 3;
    public $clasesperiodo1 = [];
    public $opcion = 1;
    public $periodo2 = [];
    public $periodosrestantes = 0;

    public $showModal = false;


    public function mount()
    {
        $lib = new lib();
        $this->clasesperiodo1 = $lib->get_plan_estudio($this->cant);
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
        $this->clasesperiodo1 = $lib->get_plan_estudio($cantidad);
        $this->opcion = 1;
    }

    public function setopcion($opcion)
    {
        if($opcion == 1 )
        {
            $lib = new lib();
            $this->clasesperiodo1 = $lib->get_plan_estudio($this->cant);
        }
        $this->periodosrestantes = count($this->clasesperiodo1);
       
        $this->opcion = $opcion;
    }

    public function openModal()
    {
        // actualizar la lista de clases del periodo actual
        $lib = new lib();
        $this->periodo2 = $lib->get_plan_estudio($this->cant);


        $this->opcion = 3;

        
    }
}
