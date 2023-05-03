<?php

namespace App\Http\Livewire;
// importar el modelo user, student, clases, carreras para poder usarlo
// importar el modelo auth para poder usarlo
use App\Models\Clase;
use App\Models\Carrera;
use App\Models\Student;
use App\Models\User;
use Livewire\Component;

class Selectcant extends Component
{
 
    public $clasesperiodo1 = [];
    public $clases;

    public function mount()
    {
        $this->clases=  auth()->user()->student->clasesdisponibles->count();
    }
    
    public function render()
    {
        return view('livewire.selectcant.selectcant');
    }

    public function clases1($cantidad)
    {   

       $this->clasesperiodo1 =  auth()->user()->student->clasesdisponibles->sortByDesc('prioridad')->take($cantidad);
       
         $this->clasesperiodo1 = $this->clasesperiodo1->shuffle();
    }
   

}
