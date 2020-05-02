<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
       // $this->call(User::class);
        factory(User::class)->create([
            'name' => 'User1',
            'email' => 'austinezaloa@email.com',
            'password' => bcrypt('123456789'),
        ]);





    }
}
