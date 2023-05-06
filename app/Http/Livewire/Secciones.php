<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Secciones extends Component
{
    public $status = 1;
    public function render()
    {
        return view('livewire.secciones');
    }

    public function changeStatus($status)
    {   
        $this->status = $status;
    }
}
