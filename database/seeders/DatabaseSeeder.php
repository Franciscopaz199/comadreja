<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\clase;
use Illuminate\Support\Facades\DB;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(PermissionSeeder::class);
        $this->call(Roleseed::class);
        $this->call(CarrerasistemasSeed::class);
        $this->call(Userseed::class);
    }
}
