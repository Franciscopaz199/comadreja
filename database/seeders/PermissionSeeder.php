<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $permissions = [
            [
                'name' => 'elegir universidad',
                'guard_name' => 'web',
            ],
            [
                'name' => 'elegir carrera',
                'guard_name' => 'web',
            ],
            [
                'name' => 'seleccionar clases',
                'guard_name' => 'web',
            ],
            [
                'name' => 'ver inicio estudiante',
                'guard_name' => 'web',
            ],
            [
                'name' => 'ver estadisticas estudiante',
                'guard_name' => 'web',
            ],
            [
                'name' => 'ver inicio datos carrera',
                'guard_name' => 'web',
            ],
            [
                'name' => 'ver informacion clase',
                'guard_name' => 'web',
            ],
            [
                'name' => 'editar clases',
                'guard_name' => 'web',
            ],
            [
                'name' => 'editar perfil',
                'guard_name' => 'web',
            ],
            [
                'name' => 'ver plan de estudios',
                'guard_name' => 'web',
            ]

         ];

        foreach ($permissions as $permission) {
            \Spatie\Permission\Models\Permission::create($permission);
        }
    }
}
