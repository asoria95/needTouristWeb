<?php

use Illuminate\Database\Seeder;

class personsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Persons\Persons::class, 500)->create();
    }
}
