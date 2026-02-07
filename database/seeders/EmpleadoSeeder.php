<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Empleado::create(['cedula'=>'V-123', 'sueldo'=>500, 'activo'=>true, 'fecha_ingreso'=>'2023-01-01']);
\App\Models\Empleado::create(['cedula'=>'V-456', 'sueldo'=>600, 'activo'=>false, 'fecha_ingreso'=>'2024-02-02']);
\App\Models\Empleado::create(['cedula'=>'V-789', 'sueldo'=>700, 'activo'=>true, 'fecha_ingreso'=>'2025-03-03']);
    }
}
