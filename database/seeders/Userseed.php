<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\student;

class Userseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Francisco Paz',
            'email' => 'fjpazf@unah.hn',
            'password' => '12345678',
        ]);
        // crear el estudiante
        $student = student::create([
            'user' => $user->id,
            'accountnumber' => '20212300157',
        ]);
        $user->assignRole('estudiante');
    }
}
