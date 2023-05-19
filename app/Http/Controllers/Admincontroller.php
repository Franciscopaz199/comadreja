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
    public function crearpermiso(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name',
        ]);
        $permiso = Permission::create(['name' => $request->name]);
        return redirect()->route('Rolespermisos')->with('info', 'Permiso creado con exito');
    }


    //Route::delete('eliminarrol/{rol}', [App\Http\Controllers\Admincontroller::class, 'eliminarrol'])->name('eliminarrol')->middleware('auth');
    public function eliminarrol(Role $rol)
    {
        $rol->delete();
        return redirect()->route('Rolespermisos')->with('info', 'Rol eliminado con exito');
    }

    public function eliminarpermiso(Permission $permiso)
    {
        $permiso->delete();
        return redirect()->route('Rolespermisos')->with('info', 'Permiso eliminado con exito');
    }

    public function usuariosporrol(Role $rol)
    {
        $variables = [
            'usuarios' => $rol->users()->get(),
            'rol' => $rol,
            'usuariosn' => User::whereDoesntHave('roles', function ($query) use ($rol) {
                $query->where('role_id', $rol->id);
            })->get(),

        ];
        return view('livewire.rolespermisos.usuariosporrol', $variables);
    }

    public function quitarrol(User $user, Role $rol)
    {
        $user->removeRole($rol);
        return redirect()->route('usuariosporrol', $rol)->with('info', 'Rol quitado con exito');
    }

    public function agregarrol(User $user, Role $rol)
    {
        $user->assignRole($rol);
        return redirect()->route('usuariosporrol', $rol)->with('info', 'Rol agregado con exito');
    }
    
    public function asignarpermisos(Role $rol)
    {
        $variables = [
            'role' => $rol,
            'permisos_role' => $rol->permissions()->get(),
            'permisosn_role' => Permission::whereDoesntHave('roles', function ($query) use ($rol) {
                $query->where('role_id', $rol->id);
            })->get(),
        ];
        return view('livewire.rolespermisos.asignarpermisos', $variables);
    }

    public function asignarpermiso(Role $rol, Permission $permiso)
    {
        $rol->givePermissionTo($permiso);
        return redirect()->route('asignarpermisos', $rol)->with('info', 'Permiso asignado con exito');
    }

    public function quitarpermiso(Role $rol, Permission $permiso)
    {
        $rol->revokePermissionTo($permiso);
        return redirect()->route('asignarpermisos', $rol)->with('info', 'Permiso quitado con exito');
    }
    
   
}
