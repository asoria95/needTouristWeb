<?php

use Illuminate\Database\Seeder;

class afilliateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=25; $i <=125  ; $i++) {
        factory(App\Models\Persons\Afilliate::class)->create([
          'id_afiliado' => $i
        ]);
      }
    }
}
