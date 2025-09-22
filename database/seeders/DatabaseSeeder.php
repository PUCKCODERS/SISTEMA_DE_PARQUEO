<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Ajuste;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //super admin
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin316'),
            'nombres' => 'Super',
            'apellidos' => 'Admin',
            'tipo_documento' => 'CI',
            'numero_documento' => '1234567890',
            'celular' => '0968873896',
            'fecha_nacimiento' => '1990-01-01',
            'genero' => 'MASCULINO',
            'direccion' => 'Direccion del Super Admin',
            'contacto_nombre' => 'Contacto Super Admin',
            'contacto_telefono' => '0968873896',
            'contacto_parentesco' => 'Amigo',
            'estado' => true,
            ]
        );

        Ajuste::create([
            'nombre' => 'PARQUEO TURUBAMBA ALTO',
            'descripcion' => 'SISTEMA DE PARQUEO',
            'sucursal' => 'QUITO',
            'direccion' => 'av. moro moro y alberto spencer',
            'telefonos' => '0968873896 - 022672899',
            'logo' => 'ao0XZKxqmhbP6fLZkr7Lut4102oU1OkYLelSPzsX.png',
            'logo_auto' => 'Je5ms8jEuB00vqTG7z0oo2hYgpbXLHrnO0vECe85.png',
            'divisa' => '$',
            'correo' => 'jko_wy316@hotmail.com',
            'pagina_web' => 'https://www.pusckcoders316.com'
        ]);
    }
}
