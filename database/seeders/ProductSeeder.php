<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'product_id' => rand(1, 1000),
            'status_master_id' => '1',
            'category_master_id' => " 1;2;3;6;7",
            'price_master_id' => 100,
            'image_master_id' => 3,
            'image_banner' => 'menu-1.png',
            'name' => 'Greek Salad',
            'barcode' => '123456789',
            'recipe_desc' => 'Tomatoes, green bell pepper, sliced cucumber onion, olives, and feta cheese. ',
            'rating' => 4,
            'wishlist' => 'Sample Wishlist',
            'lang' => 'en',
            'lang_id' => '1',
            'created_by' => 'admin',
            'updated_by' => 'admin',
        ]);

        
        Product::create([
            'product_id' => rand(1, 1000),
            'status_master_id' => '1',
            'category_master_id' => " 1;2;3;6;7",
            'price_master_id' => 100,
            'image_master_id' => 3,
            'image_banner' => 'menu-2.png',
            'name' => 'Lasagne',
            'barcode' => '123456789',
            'recipe_desc' => 'Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices .',
            'rating' => 4,
            'wishlist' => 'Sample Wishlist',
            'lang' => 'en',
            'lang_id' => '1',
            'created_by' => 'admin',
            'updated_by' => 'admin',
        ]);


        Product::create([
            'product_id' => rand(1, 1000),
            'status_master_id' => '1',
            'category_master_id' => " 1;2;3;6;7",
            'price_master_id' => 100,
            'image_master_id' => 3,
            'image_banner' => 'menu-3.png',
            'name' => 'Butternut Pumpkin',
            'barcode' => '123456789',
            'recipe_desc' => 'Typesetting industry lorem Lorem Ipsum is simply dummy text of the priand. ',
            'rating' => 4,
            'wishlist' => 'Sample Wishlist',
            'lang' => 'en',
            'lang_id' => '1',
            'created_by' => 'admin',
            'updated_by' => 'admin',
        ]);


        Product::create([
            'product_id' => rand(1, 1000),
            'status_master_id' => '1',
            'category_master_id' => " 1;2;3;6;7",
            'price_master_id' => 100,
            'image_master_id' => 3,
            'image_banner' => 'menu-4.png',
            'name' => 'Tokusen Wagyu',
            'barcode' => '123456789',
            'recipe_desc' => 'Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices.  ',
            'rating' => 4,
            'wishlist' => 'Sample Wishlist',
            'lang' => 'en',
            'lang_id' => '1',
            'created_by' => 'admin',
            'updated_by' => 'admin',
        ]);

        Product::create([
            'product_id' => rand(1, 1000),
            'status_master_id' => '1',
            'category_master_id' => " 1;2;3;6;7",
            'price_master_id' => 100,
            'image_master_id' => 3,
            'image_banner' => 'menu-5.png',
            'name' => 'Olivas Rellenas',
            'barcode' => '123456789',
            'recipe_desc' => 'Avocados with crab meat, red onion, crab salad stuffed red bell pepper and green bell pepper. ',
            'rating' => 4,
            'wishlist' => 'Sample Wishlist',
            'lang' => 'en',
            'lang_id' => '1',
            'created_by' => 'admin',
            'updated_by' => 'admin',
        ]);


        Product::create([
            'product_id' => rand(1, 1000),
            'status_master_id' => '1',
            'category_master_id' => " 1;2;3;6;7",
            'price_master_id' => 100,
            'image_master_id' => 3,
            'image_banner' => 'menu-6.png',
            'name' => 'Opu Fish',
            'barcode' => '123456789',
            'recipe_desc' => 'Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices.',
            'rating' => 4,
            'wishlist' => 'Sample Wishlist',
            'lang' => 'en',
            'lang_id' => '1',
            'created_by' => 'admin',
            'updated_by' => 'admin',
        ]);
    }
}
