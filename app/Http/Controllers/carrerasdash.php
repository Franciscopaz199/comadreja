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
            'carrera' => $this->getClasescarrera($carrera),
        ]);
    }

    public function eliminar(Request $request)
    {
        $carrera = $this->getClasescarrera(Carrera::find($request->id));
        $clase = $this->shearchclase($request->clase_id, $carrera);
        $this->prioridad($clase, $carrera, -1);   
        $carrera->clases()->detach($request->clase_id);
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
        
        // validar si existe el requisito de la clase
        if ($request->requisitoclass) {
            $requisito = Clase::where('codigo', $request->requisitoclass)->first()->id;
        } else {
            $requisito = null;
        }
        if($request->requisitoclass2){
            $requisito2 = Clase::where('codigo', $request->requisitoclass2)->first()->id;
        }else{
            $requisito2 = null;
        }

        
        // buscar la clase en la lista de clases de la carrera
       
 
        // agregar la relacion de muchos a muchos entre carrera y clases
        $carrera->clases()->attach($clase->id, ['requisito_id' => $requisito, 'requisito2_id' => $requisito2, 'prioridad' => 0]);
        $carrera =$this->getClasescarrera($carrera);
        foreach ($carrera->clases as $clasec) {
            if ($clasec->id == $clase->id) {
                $this->prioridad($clasec, $carrera,1);
                break;
            }
        }
        return redirect()->route('carreraspanel', ['id' => $request->id]);
    }


    public function prioridad($clase, $carrera, $n)
    {
        if($clase->requisitos){
            foreach ($clase->requisitos as $requisito) {
                // actualizar la prioridad pivote de la clase
                $nueva = $requisito->pivot->prioridad + $n;
                $carrera->clases()->updateExistingPivot($requisito->id, ['prioridad' =>  $nueva]);
                    if($requisito->requisitos){
                        $this->prioridad($requisito, $carrera, $n);
                    }
            }
        }
    }

    public function getClasescarrera($carrera)
    {
        // buscar en un array de clases

        foreach ($carrera->clases as $clase) {
            if($clase->pivot->requisito_id){
                // agregar a la lista 
                array_push($clase->requisitos, $this->shearchclase($clase->pivot->requisito_id, $carrera));
            }
            if($clase->pivot->requisito2_id){
                array_push($clase->requisitos, $this->shearchclase($clase->pivot->requisito2_id, $carrera));
            }
        }
        return $carrera;
    }

    public function shearchclase($id, $carrera)
    {
        foreach ($carrera->clases as $clasec) {
            if ($clasec->id == $id) {
                return $clasec;
            }
        }
        return null;
    }
    
}

