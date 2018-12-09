<?php

use Illuminate\Database\Seeder;

class turistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=126; $i <=500  ; $i++) {
        factory(App\Models\Persons\Turist::class)->create([
          'id_turista' => $i
        ]);
      }
    }
}
