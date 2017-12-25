<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = array(0 => ['container_type' => 'LCBO Glass 24s',
                                'deposit_value' => 0.1,
                                'return_container_type' => 'Please return using original purchase cases in 24s',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],
            1=> ['container_type' => 'LCBO Glass 24s',
                'deposit_value' => 0.1,
                'return_container_type' => 'Please return using original purchase cases in 24s',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],
            2 => ['container_type' => 'LCBO Glass 12s',
                'deposit_value' => 0.2,
                'return_container_type' => 'Please return using original purchase cases in 12s',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],
            3 => ['container_type' => 'Bag in Box/ Tetra 24s',
                'deposit_value' => 0.1,
                'return_container_type' => 'Please return using clear plastic bags 24 quantities',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],
            4 => ['container_type' => 'Bag in Box/ Tetra 12s',
                'deposit_value' => 0.2,
                'return_container_type' => 'Please return using clear plastic bags 12 quantities',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],
            5 => ['container_type' => 'Plastic Bottles 24s',
                'deposit_value' => 0.1,
                'return_container_type' => 'Please return using clear plastic bags 24 quantities',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],
            6 => ['container_type' => 'Plastic Bottles 12s',
                'deposit_value' => 0.2,
                'return_container_type' => 'Please return using clear plastic bags 12 quantities',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],
            7 => ['container_type' => 'Can (TBS/LCBO) 24s',
                'deposit_value' => 0.1,
                'return_container_type' => 'Please return using clear plastic bags 24 quantities',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],
            8 => ['container_type' => 'Can (TBS/LCBO) 12s',
                'deposit_value' => 0.2,
                'return_container_type' => 'Please return using clear plastic bags by the dozen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),]
        );
        DB::table('items')->insert($items);
    }
}
