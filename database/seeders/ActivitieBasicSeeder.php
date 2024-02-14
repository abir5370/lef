<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitieBasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('basic_activities')->insert([
            'title' => 'Admin',
            'details' => 'Admin fdsfsdfs',
<<<<<<< HEAD
=======
<<<<<<< HEAD
            'image' => '1244.jpg',
=======
            'image' => '125.jpg',
>>>>>>> 8f203068f90332d7767e8919d0df2e8e8c620191
>>>>>>> 957944cc614795f7ec0f64159391920c36741df4
            'gallery_header' => 'Edit gallery_header',
            'vdo_header' => 'Edit vdo_header',
            'vdo_link' => 'Edit vdo_link',
        ]);
    }
}
