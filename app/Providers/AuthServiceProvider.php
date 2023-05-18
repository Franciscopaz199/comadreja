<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
/*
        //Definir los roles y permisos iniciales
        Role::create(['name' => 'jefe de departamento']);
        Role::create(['name' => 'estudiante']);
        Role::create(['name' => 'administrador']);

        
        // crear los permisos para el jefe de departamento
        Permission::create(['name' => 'ver inicio jefe']);
        Permission::create(['name' => 'permiso jefe']);


        // crear los permisos para el estudiante
        Permission::create(['name' => 'permiso estudiante']);
        
        // crear los permisos para el administrador
        Permission::create(['name' => 'permiso administrador']);
        

        // asignar los permisos al jefe de departamento
        $role = Role::findByName('jefe de departamento');
        $role->givePermissionTo('ver inicio jefe');
        $role->givePermissionTo('permiso jefe');

        // asignar los permisos al estudiante
        $role = Role::findByName('estudiante');
        $role->givePermissionTo('permiso estudiante');

        // asignar los permisos al administrador
        $role = Role::findByName('administrador');
        $role->givePermissionTo('permiso administrador');
        */


    }
}
