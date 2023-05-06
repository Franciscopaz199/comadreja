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


    public function mount()
    {
        $lib = new lib();
        $this->clasesperiodo1 = $lib->get_plan_estudio($this->cant);
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
    }

}
