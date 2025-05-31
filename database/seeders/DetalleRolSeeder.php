<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DetalleRolSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('detalle_roles')->insert([
            'role_id' => 1,
            'usuario_id' => 1,
            'creado_por' => 'seeder',
            'fecha_creacion' => Carbon::now(),
            'actualizado_por' => null,
            'fecha_actualizacion' => null,
            'bloqueado_por' => null,
            'fecha_bloqueo' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
