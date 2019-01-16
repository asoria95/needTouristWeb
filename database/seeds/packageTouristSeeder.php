<?php

use Illuminate\Database\Seeder;

class packageTouristSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i=1 ; $i <= 20 ; $i++){
        App\Models\Service\PackageTourist::create([
              'descripcion' => "Paquete ".$i,
              'itinerario' => "paquetesTuristicos/cDDClAZsxX7K4mIHBFEb5jS2DufpVsj09gF5BWcp.pdf",
              'price' => "125.36",
            ]);
      }
    }
}
