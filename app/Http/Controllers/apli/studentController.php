<?php

namespace App\Http\Controllers\apli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Uni;
use App\Models\User;
use App\Models\student;
use App\Models\carrera;
use App\Models\clase;
use App\Http\Controllers\admin\admincontroller;
use App\Models\puente;
use App\Http\Controllers\admin\lib;


class studentController extends Controller
{
    public function selectuni()
    {
        if( auth()->user()->student->uni == null )
        {
            return view('student.index', [
                'universidades' => Uni::all()
            ]);
        }
        return redirect()->route('selectcarrera');
    }

    public function selectuniv(Request $request)
    {
        $request->validate([
            'unive' => 'required | exists:unis,id'
        ]);

        $universidad = $request->unive;
        // agregar la universidad al estudiante mediante la relacion uno a muchos
        $user = User::find(auth()->user()->id);
        $student = $user->student;
        $student->uni = $universidad;
        $student->save();
        return redirect()->route('selectcarrera' );
    }



    public function selectcarrera()
    {
        if(auth()->user()->student->uni == null)
        {
            return redirect()->route('selectuni');
        }

        if(auth()->user()->student->carrera == null)
        {
            return view('student.selecarrera', [
                'carreras' => Uni::find(auth()->user()->student->uni)->carreras,
                'universidad' => Uni::find(auth()->user()->student->uni)
            ]);
        }
        return redirect()->route('selectclases');
    }




    public function selectcarrer(Request $request)
    {
        $request->validate([
            'carrera' => 'required | exists:carreras,id'
        ]);
        $carrera = $request->carrera;
        // agregar la carrera al estudiante mediante la relacion uno a muchos
        $user = User::find(auth()->user()->id);
        $student = $user->student;
        $student->carrera = $carrera;
        $student->save();
        return redirect()->route('selectclases');
    }


    public function selectclases()
    {
        if(auth()->user()->student->carrera == null)
        {
            return redirect()->route('selectcarrera');
        }   


        if(auth()->user()->student->status == null)
        {
            return view('student.selectclases.index', [
                'carrera' => auth()->user()->student->carrer
            ]);
        }
        return redirect()->route('home');
        
    }



    public function checkclase(Request $request)
    {
        
        // validar que el array de clases enviado todas las clases pertenezcan a la carrera del estudiante
        $request->validate([
            'clase' => 'required | array',
            'clase.*' => 'exists:clases,id|in:'.auth()->user()->student->carrer->clases->implode('id', ',')
        ]);

        // validar que eligio la clase y tambien sus respectivos requisitos
        /** 
          * 
          * 
          * =>       Hacer esta validacion !!!!!!!!!!!!!!!!!!!!!!!!!!!
          * 
          * 
          **/

        // editar el status del estudiante a true        
        auth()->user()->student->status = true;
        auth()->user()->student->save();

        auth()->user()->student->clases()->detach();

       
        if($request->clase != null)
        {
            foreach ($request->clase as $clase) {
                auth()->user()->student->clases()->attach($clase);
            }
        }

         $admin = new admincontroller();
         $prueba  =  $admin->clasesquepuedelleva();
         return redirect()->route('home');
    }

    public function homeestudiante()
    {
        if(Auth()->user()->student->status == null)
        {
            return redirect()->route('selectclases');
        }
        
        $clases = auth()->user()->student->clasesdisponibles;
        $UV = 0;

        foreach ($clases as $clase) {
            $UV = $UV + $clase->UV;
        }
        return view('student.home.home', [
            'carrera' => auth()->user()->student->carrer,
            'clases' => $clases,
            'UV' => $UV
        ]);
    }


    
    public function editclases(){
        return view('student.editclases.editclases', [
            'carrera' => auth()->user()->student->carrer,
            'clases' => auth()->user()->student->clases,
        ]);
    }

    public function homees(){
        if(Auth()->user()->student->status == null)
        {
            return redirect()->route('selectclases');
        }
        $clases = auth()->user()->student->clasesdisponibles;
        $UV = 0;
        $totalUV = 0;

        foreach ($clases as $clase) {
            $UV = $UV + $clase->clase->UV;
            
        }


        foreach (auth()->user()->student->carrer->puente as $puente) {
            $totalUV = $totalUV + $puente->clase->UV;
        }

        return view('student.home.homees', [
            'carrera' => auth()->user()->student->carrer,
            'clases' => $clases,
            'UV' => $UV,
            'totalUVcarrera' => $totalUV,
            'cantidadclases' => auth()->user()->student->clasesdisponibles->count(),
        ]);
    }


    public function planestudios(){
        return view('student.plandeestudios.planestudios', [
            'carrera' => auth()->user()->student->carrer,
            'clases' => auth()->user()->student->clases
        ]);
    }


    
    public function crearplan(){
        return view('student.crear.crearplan', [
            'carrera' => auth()->user()->student->carrer,
            'clases' => auth()->user()->student->clases
        ]);
    }  



    public function companeros(){
        return view('student.companeros.companeros', [
            'carrera' => auth()->user()->student->carrer,
            'clases' => auth()->user()->student->clases
        ]);
    }


    public function acercade(){
        return view('student.acercade.acercade', [
            'carrera' => auth()->user()->student->carrer,
            'clases' => auth()->user()->student->clases
        ]);
    }



    public function util(){
        return view('student.util.util', [
            'carrera' => auth()->user()->student->carrer,
            'clases' => auth()->user()->student->clases
        ]);
    }


    public function estadisticas(){

          
         $clasesestudiante = auth()->user()->student->clases->count();
         $clasescarrera = auth()->user()->student->carrer->clases->count();
         $UV = auth()->user()->student->clases->sum('UV');
         $totalUV = auth()->user()->student->carrer->clases->sum('UV');
         $departamentos = auth()->user()->student->carrer->departamentos();
         $porcentajeUV = ($UV * 100) / $totalUV;
         $pocentajeClases = ($clasesestudiante * 100) / $clasescarrera;
         $cantidad = round(auth()->user()->student->carrer->clases->count()  / auth()->user()->student->carrer->periodos);
         $lib = new lib();
         $periodosrestantes = $lib->get_plan_estudio($cantidad)["cant"];
         $periodospasados = auth()->user()->student->carrer->periodos - $periodosrestantes; 



         
        return view('student.estadisticas.estadisticas', [
            'clasesestudiante' => $clasesestudiante,
            'clasescarrera' => $clasescarrera,
            'UV' => $UV,
            'totalUV' => $totalUV,
            'porcentajeUV' => round($porcentajeUV, 2),
            'pocentajeClases' => round($pocentajeClases, 2),
            'departamentos' => $departamentos,
            'carrera' => auth()->user()->student->carrer,
            'clases' => auth()->user()->student->clases,
            'periodosrestantes' => $periodosrestantes,
            'periodos' => auth()->user()->student->carrer->periodos,
            'promedioclases' => $cantidad,
            'periodospasados' => $periodospasados
        ]);
    }



    public function clase(Request $request){
        $clase = puente::find($request->clase);
        // dividir el mes actual entre 4 para saber el periodo actual
        $mes = date('m') -1;

        if($mes <= 7 )  
        {
            $periodo =  -abs(intval(($mes/ 4) + 1)-2) + 3;
            $anio = date('Y');
        }
        else
        {
            $periodo =  -abs(intval(($mes/ 4) + 1)-2) + 2;
            $anio = date('Y') + 1;
        }

        return view('student.clase.clase', [
            'carrera' => auth()->user()->student->carrer,
            'clase' => $clase,
            'periodo' => $periodo,
            'anio' => $anio
        ]);
    }



    public function clase2(Request $request){
        $clase = puente::find($request->clase);
        // dividir el mes actual entre 4 para saber el periodo actual
        $mes = date('m') -1;

        if($mes <= 7 )  
        {
            $periodo =  -abs(intval(($mes/ 4) + 1)-2) + 3;
            $anio = date('Y');
        }
        else
        {
            $periodo =  -abs(intval(($mes/ 4) + 1)-2) + 2;
            $anio = date('Y') + 1;
        }

        return view('student.clase.infoClase', [
            'carrera' => auth()->user()->student->carrer,
            'clase' => $clase,
            'periodo' => $periodo,
            'anio' => $anio
        ]);
    }
}
