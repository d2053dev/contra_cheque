<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      User::create([
        'name'   => 'Monique',
        'login'  => 'nicksilva',
        'pass'   => env('PASSWORD_HASH') ? bcrypt('12345') : '12345',
      ]);
        // $this->call(UsersTableSeeder::class);
    }
}
