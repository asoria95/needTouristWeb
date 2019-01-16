<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(personsSeeder::class);
      $this->call(afilliateSeeder::class);
      $this->call(administratorSeeder::class);
      $this->call(turistSeeder::class);
      $this->call(roleSeeder::class);
      $this->call(userSeeder::class);
      $this->call(userRoleSeeder::class);
      $this->call(packageTouristSeeder::class);
      $this->call(serviceSeeder::class);
    }
}
