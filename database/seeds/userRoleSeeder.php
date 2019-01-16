<?php

use Illuminate\Database\Seeder;

class userRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <=500  ; $i++) {

          if($i >= 1 && $i <=24){
            App\Models\Persons\usersRole::create([
                'id_usuario' => $i,
                'id_rol' => 1,
            ]);
          }elseif ($i >= 25 && $i <=125) {
            App\Models\Persons\usersRole::create([
                'id_usuario' => $i,
                'id_rol' => 3,
            ]);
          }else {
            App\Models\Persons\usersRole::create([
                'id_usuario' => $i,
                'id_rol' => 2,
            ]);
          }
        }
    }
}
