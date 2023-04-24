<?php

use App\User;
use App\Item;

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
        User::create([
            'name' => 'User1',
            'email' => 'austinezaloa@gmail.com',
            'password' => bcrypt('123456789'),
        ]);

        Item::create([
            'name' => 'tithe'
        ]);
        Item::create([
            'name' => 'offeringCombined'
        ]);
        Item::create([
            'name' => 'CampOffering'
        ]) ; 
        Item::create([
            'name' => 'CampExpense'
        ]) ; 
        Item::create([
            'name' => 'ChurchDevelopment'
        ]);
        Item::create([
            'name' => 'Benovelence'
        ]) ; 
        Item::create([
            'name' => 'AMO'
        ]) ; 
        Item::create([
            'name' => 'AWO'
        ]);
        Item::create([
            'name' => 'Youth'
        ]);
        Item::create([
            'name' => 'Children'
        ]) ; 
        Item::create([
            'name' => 'StationFund'
        ]) ; 
        Item::create([
            'name' => 'Mission'
        ]);
        Item::create([
            'name' => 'GoodSamaritan'
        ]);
        Item::create([
            'name' => 'ThanksGiving'
        ]);
        Item::create([
            'name' => 'Ambassadors'
        ]) ; 
        Item::create([
            'name' => 'Pathfinders'
        ]) ; 
        Item::create([
            'name' => 'Others'
        ]);
    }
}
