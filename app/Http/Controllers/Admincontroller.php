<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use \Spatie\Permission\Models\Role;
use \Spatie\Permission\Models\Permission;

class Admincontroller extends Controller
{
    //

    public function Rolespermisos()
    {

        $variables = [
            'users' => User::all(),
            'roles' => \Spatie\Permission\Models\Role::all(),
            'permisos' => \Spatie\Permission\Models\Permission::all(),
        ];
        return view('livewire.rolespermisos.rolespermisos', $variables);
    }

    public function crearrol(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name',
        ]);
        $rol = Role::create(['name' => $request->name]);
        return redirect()->route('Rolespermisos')->with('info', 'Rol creado con exito');
    }

    //Route::delete('eliminarrol/{rol}', [App\Http\Controllers\Admincontroller::class, 'eliminarrol'])->name('eliminarrol')->middleware('auth');
    public function eliminarrol(Role $rol)
    {
        $rol->delete();
        return redirect()->route('Rolespermisos')->with('info', 'Rol eliminado con exito');
    }
}
