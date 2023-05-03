<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// modelo de la tabla
use App\Models\Carrera;
use App\Models\Clase;

class carrerasdash extends Controller
{
    public function render()
    {
        return view('livewire.carrerasdashboard.index', [
            'carreras' => carrera::all()
        ]);
    }

    public function panel(Request $request)
    {
        $carrera = Carrera::find($request->id);
        return view('livewire.carrerasdashboard.panel', [
            'carrera' => $carrera,
        ]);
    }

    public function eliminar(Request $request)
    {
        $carrera = Carrera::find($request->id); 
        $puente = $carrera->puente()->where('id', $request->clase_id)->first();

        if($puente->requisitos->count() > 0){
            foreach($puente->requisitos as $requisito){
                $p = $carrera->puente()->where('clases_id', $requisito->id)->first();
                $this->prioridad($p, $carrera, -1);
            }
         }

        $puente->delete();

        return redirect()->route('carreraspanel', ['id' => $request->id]);
    }

    public function agregar(Request $request)
    {
        // validar los datos
        $request->validate([
            'id' => 'required',
            'codeclass' => 'required',
        ]);
        $carrera = Carrera::find($request->id);
        $clase = Clase::where('codigo', $request->codeclass)->first();
        $existe = $carrera->puente()->where('clases_id', $clase->id)->first();
        
        if($existe){
            $puente = $existe;
        }else{
            $puente = new \App\Models\puente;
            $puente->clases_id = $clase->id;
            $puente->career_id = $carrera->id;
            $puente->save();
        }

        if($request->requisitoclass){
            $requisito = Clase::where('codigo', $request->requisitoclass)->first();
            $puente->requisitos()->attach($requisito->id);
            $p = $carrera->puente()->where('clases_id', $requisito->id)->first();
            $this->prioridad($p, $carrera, 1);
        }

        return redirect()->route('carreraspanel', ['id' => $request->id]);
    }


    public function prioridad($clase, $carrera, $n)
    {
        $clase->prioridad = $clase->prioridad + $n;
        $clase->save();
        if($clase->requisitos){
            foreach ($clase->requisitos as $requisito) {
                $p = $carrera->puente()->where('clases_id', $requisito->id)->first();
                $this->prioridad($p, $carrera, $n);
            }
        }
    }


    
}

