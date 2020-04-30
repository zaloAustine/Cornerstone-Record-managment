<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //   $this->call(User::class);


        factory(User::class)->create([
            'name' => 'ZaloAustine',
            'email' => 'austinezaloa@gmail.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
