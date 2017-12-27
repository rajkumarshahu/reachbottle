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
        $items = array(['container_type' => 'LCBO Glass 24s',
                'deposit_value' => 0.1,
                'return_container_type' => 'Please return using original purchase cases in 24s',
                'is_active' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],
            ['container_type' => 'LCBO Glass 12s',
                'deposit_value' => 0.2,
                'return_container_type' => 'Please return using original purchase cases in 12s',
                'is_active' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],
            ['container_type' => 'Bag in Box/ Tetra 24s',
                'deposit_value' => 0.1,
                'return_container_type' => 'Please return using clear plastic bags 24 quantities',
                'is_active' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],
            ['container_type' => 'Bag in Box/ Tetra 12s',
                'deposit_value' => 0.2,
                'return_container_type' => 'Please return using clear plastic bags 12 quantities',
                'is_active' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],
            ['container_type' => 'Plastic Bottles 24s',
                'deposit_value' => 0.1,
                'return_container_type' => 'Please return using clear plastic bags 24 quantities',
                'is_active' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],
            ['container_type' => 'Plastic Bottles 12s',
                'deposit_value' => 0.2,
                'return_container_type' => 'Please return using clear plastic bags 12 quantities',
                'is_active' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],
            ['container_type' => 'Can (TBS/LCBO) 24s',
                'deposit_value' => 0.1,
                'return_container_type' => 'Please return using clear plastic bags 24 quantities',
                'is_active' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],
            ['container_type' => 'Can (TBS/LCBO) 12s',
                'deposit_value' => 0.2,
                'return_container_type' => 'Please return using clear plastic bags by the dozen',
                'is_active' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),]
        );
        DB::table('items')->insert($items);
    }
}
