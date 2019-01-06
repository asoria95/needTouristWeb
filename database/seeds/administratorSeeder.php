<?php

use Illuminate\Database\Seeder;

class administratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=1; $i <25  ; $i++) {
      factory(App\Models\Persons\Administrator::class)->create([
        'id_administrador' => $i
      ]);
    }

    }
}
