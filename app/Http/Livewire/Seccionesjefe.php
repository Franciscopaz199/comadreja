<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Clase;

class Seccionesjefe extends Component
{
    use WithPagination;
	protected $paginationTheme = 'bootstrap';
    public $claseb;
    public $status = 1;
    public $keyWord;
    



    public function render()
    {
        return view('jefe.seccionesjefe', [
            /* 
            *Esta consulta recupera las clases que pertenecen a las carreras en una universidad dada
            */
            'clases' =>  auth()->user()->jefe->uni->carreras->flatmap(function ($carrera){
                                return $carrera->clases;
                            })->unique()
                            ->where('departamento', auth()->user()->jefe->depto_id)
                           
        ]);
    }

    public function changeStatus($numero)
    {
        $this->status = $numero;
    }


    public function detalles($id)
    {
        $this->claseb = Clase::find($id);
    }
}
