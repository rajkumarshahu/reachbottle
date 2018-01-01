<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Raj Kumar Shahu',
            'email' => 'rajkumarshahu@gmail.com',
            'password' => bcrypt('random'),
            'address1' => '240 Wellesley Street east',
            'address2' => 'apt: 0921',
            'postalcode' => 'M4X 1G5',
            'phone' => '6473027237',
            'is_active'=>'1',
            'is_approved'=>'1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
