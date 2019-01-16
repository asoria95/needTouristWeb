<?php

use Illuminate\Database\Seeder;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      App\Models\Persons\Role::create([   'nombre' => "Administrador",
                          'descripcion' => "Este rol permite acceder a todas las funcionalides",]);

      App\Models\Persons\Role::create([   'nombre' => "Turista",
                          'descripcion' => "Este rol permite acceder a las funcionalides asociadas al turista",]);

      App\Models\Persons\Role::create([   'nombre' => "Afiliado",
                          'descripcion' => "Este rol permite acceder a todas las funcionalides de un afiliado",]);

    }

}
