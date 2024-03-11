<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MasterData\CategoryMaster;

class CategorySeeder extends Seeder
{

    // Author : Aslan
    public function run(): void
    {
        CategoryMaster::create([
            'category_master_id'=> '1',
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'Breakfast',
            'desc'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        CategoryMaster::create([
            'category_master_id'=> '2',
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'Lunch',
            'desc'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        CategoryMaster::create([
            'category_master_id'=> '3',
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'Dinner',
            'desc'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        CategoryMaster::create([
            'category_master_id'=> '4',
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'Beverage',
            'desc'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        CategoryMaster::create([
            'category_master_id'=> '5',
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'Drink',
            'desc'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        CategoryMaster::create([
            'category_master_id'=> '6',
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'Food',
            'desc'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        CategoryMaster::create([
            'category_master_id'=> '7',
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'International Food',
            'desc'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        CategoryMaster::create([
            'category_master_id'=> '8',
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'Domestic Food',
            'desc'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);

    }
}
