<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin', 'description' => 'Administrator']);
        Role::create(['name' => 'guru', 'description' => 'Guru/Pengajar']);
        Role::create(['name' => 'siswa', 'description' => 'Siswa/Murid']);
    }
}
