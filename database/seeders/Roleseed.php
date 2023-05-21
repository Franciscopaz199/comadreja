<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;

class Roleseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create([
            'name' => 'estudiante',
            'guard_name' => 'web',
        ]);

        $roleestudianteverificado = Role::create([
            'name' => 'estudiante verificado',
            'guard_name' => 'web',
        ]);
        $roleadmin = Role::create([
            'name' => 'administrador',
            'guard_name' => 'web',
        ]);
        $role = Role::create([
            'name' => 'jefededepartamento',
            'guard_name' => 'web',
        ]);
        $role = Role::create([
            'name' => 'ayudante',
            'guard_name' => 'web',
        ]);
        
        // asignar los permisos al rol de estudiante verificado
        $roleestudianteverificado->givePermissionTo('ver inicio estudiante');
        $roleestudianteverificado->givePermissionTo('ver estadisticas estudiante');
        $roleestudianteverificado->givePermissionTo('ver inicio datos carrera');
        $roleestudianteverificado->givePermissionTo('ver informacion clase');
        $roleestudianteverificado->givePermissionTo('editar clases');
        $roleestudianteverificado->givePermissionTo('editar perfil');
        $roleestudianteverificado->givePermissionTo('ver plan de estudios');
    
    }
}
