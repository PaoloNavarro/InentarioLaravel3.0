<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateCatalogoLogoEmpresaSeeder extends Seeder
{
    public function run()
    {
        DB::table('catalogos')
            ->where('nombre', 'LOGO_EMPRESA')
            ->update([
                'valor' => 'logo.png',
                'updated_at' => now(),
            ]);
    }
}
