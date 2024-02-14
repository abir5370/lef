<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestHouseBasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('guest_house_basics')->insert([
            'name' => 'name',
            'title' => 'title',
            'details' => 'details',
            'image' => '4556.jpg',
            'slideDownDetails' => 'slideDownDetails',
            'vdo_link' => 'vdo_link',
            'bottom_content' => 'bottom_content',
        ]);
    }
}
