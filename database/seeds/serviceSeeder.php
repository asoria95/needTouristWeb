<?php

use Illuminate\Database\Seeder;

class serviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1 ; $i <= 50 ; $i++){
          App\Models\Service\Service::create([
            'id_afiliado' => mt_rand(25,125),
            'id_paquete' => mt_rand(1,20),
            'estado' => 'No asignado',
          ]);
        }
    }
}
