<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Barra extends Component
{

    public $status = 1;
    public $carrera = [];

    public function render()
    {
        return view('livewire.barra');
    }

    public function changeStatus($id)
    {
        $this->status = $id;
    }


    
}
