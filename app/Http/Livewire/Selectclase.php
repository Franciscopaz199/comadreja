<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Selectclase extends Component
{
    public $clasespasadas = ['u'];
    public $ncarrera;
    public $carrera;

    public function render()
    {
        return view('livewire.app.student.selectclases.selectclase');
    }
    
    public function cuenta()
    {
        $this->cuenta = $this->cuenta + 1;
    }
    public function mount()
    {
        $this->carrera = $this->ncarrera;
        $this->clases = $this->carrera->clases;
    }


}
