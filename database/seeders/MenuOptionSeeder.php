<?php

namespace Database\Seeders;

use App\Models\MenuOption;
use Illuminate\Database\Seeder;

class MenuOptionSeeder extends Seeder
{
    public function run(): void
    {
        // Rutas por rol
        $menuItems = [
         
            [
                'nombre' => 'Clientes',
                'direccion' => '/clientes',
                'roles' => [1, 2, 3],
            ],
            [
                'nombre' => 'Categorias',
                'direccion' => '/categorias',
                'roles' => [1, 2],
            ],
            [
                'nombre' => 'Compras',
                'direccion' => '/compras',
                'roles' => [1, 2, 3],
            ],
         
            [
                'nombre' => 'Empleados',
                'direccion' => '/empleados',
                'roles' => [1, 2],
            ],
            [
                'nombre' => 'Estantes',
                'direccion' => '/estantes',
                'roles' => [1, 2],
            ],
            [
                'nombre' => 'Productos',
                'direccion' => '/productos',
                'roles' => [1, 2, 3],
            ],
            [
                'nombre' => 'Proveedores',
                'direccion' => '/proveedores',
                'roles' => [1, 2],
            ],
            [
                'nombre' => 'Reporte de Venta',
                'direccion' => '/reporteVenta',
                'roles' => [1, 2],
            ],
            [
                'nombre' => 'Reportes de Compras',
                'direccion' => '/reportes',
                'roles' => [1, 2],
            ],
            [
                'nombre' => 'Reporte Diario Compra',
                'direccion' => '/reporteDiarioCompra',
                'roles' => [1, 2],
            ],
            [
                'nombre' => 'Reporte Diario',
                'direccion' => '/reporteDiario',
                'roles' => [1, 2],
            ],
            [
                'nombre' => 'Unidades',
                'direccion' => '/unidades',
                'roles' => [1, 2],
            ],
            [
                'nombre' => 'Ventas',
                'direccion' => '/ventas',
                'roles' => [1, 2, 3],
            ],
            [
                'nombre' => 'Inventario',
                'direccion' => '/inventario',
                'roles' => [1, 2, 3],
            ],
        ];

        foreach ($menuItems as $item) {
            foreach ($item['roles'] as $roleId) {
                MenuOption::create([
                    'parent_id' => null,
                    'nombre' => $item['nombre'],
                    'direccion' => $item['direccion'],
                    'role_id' => $roleId,
                ]);
            }
        }
    }
}
