<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=1; $i <=500  ; $i++) {
        $person = App\Models\Persons\Persons::find($i);
        App\User::create([
            'name' => $person->nombre,
            'email' => $person->email,
            'password' => Hash::make('123456'),
        ]);
      }

    }
}
