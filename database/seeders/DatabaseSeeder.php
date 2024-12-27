<?php

namespace Database\Seeders;

use App\Models\AttChar;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Characteristic;
use App\Models\Element;
use App\Models\Option;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Texnika',
        ]);
        Category::create([
            'name' => 'Ozuq-ovqat',
        ]);
        Category::create([
            'name' => 'Kiyim-kechak',
        ]);
        Category::create([
           'name' => 'Ob havo'
        ]);
        Category::create([
           'name' => 'Sport'
        ]);
        Category::create([
           'name' => 'Jahon yangiliklari'
        ]);
        Attribute::create([
            'category_id' => 1,
            'name' => 'Rang',
        ]);
        Attribute::create([
            'category_id' => 1,
            'name' => 'RAM',
        ]);
        Attribute::create([
            'category_id' => 1,
            'name' => 'SSD',
        ]);
        Attribute::create([
            'category_id' => 1,
            'name' => 'Protsessor',
        ]);
        Attribute::create([
            'category_id' => 1,
            'name' => 'Razmer',
        ]);
        Characteristic::create([
            'name' => 'Yellow',
        ]);
        Characteristic::create([
            'name' => 'White',
        ]);
        Characteristic::create([
            'name' => 'Black',
        ]);
        Characteristic::create([
            'name' => '4GB',
        ]);
        Characteristic::create([
            'name' => '8GB',
        ]);
        Characteristic::create([
            'name' => '16GB',
        ]);
        Characteristic::create([
            'name' => '64GB',
        ]);
        Characteristic::create([
            'name' => '128GB',
        ]);
        Characteristic::create([
            'name' => '256GB',
        ]);
        Characteristic::create([
            'name' => 'Apple A15 Bionic',
        ]);
        Characteristic::create([
            'name' => 'Apple A16 Bionic'
        ]);
        Characteristic::create([
            'name' => 'Apple A17 Pro'
        ]);
        Characteristic::create([
            'name' => '3nm',
        ]);
        Characteristic::create([
            'name' => '4nm',
        ]);
        Characteristic::create([
            'name' => '5nm',
        ]);
        AttChar::create([
            'att_id' => 1,
            'char_id' => 1,
        ]);
        AttChar::create([
            'att_id' => 1,
            'char_id' => 2,
        ]);
        AttChar::create([
            'att_id' => 1,
            'char_id' => 3,
        ]);
        AttChar::create([
            'att_id' => 2,
            'char_id' => 4,
        ]);
        AttChar::create([
            'att_id' => 2,
            'char_id' => 5,
        ]);
        AttChar::create([
            'att_id' => 2,
            'char_id' => 6,
        ]);
        AttChar::create([
            'att_id' => 3,
            'char_id' => 7,
        ]);
        AttChar::create([
            'att_id' => 3,
            'char_id' => 8,
        ]);
        AttChar::create([
            'att_id' => 3,
            'char_id' => 9,
        ]);
        AttChar::create([
            'att_id' => 4,
            'char_id' => 10,
        ]);
        AttChar::create([
            'att_id' => 4,
            'char_id' => 11,
        ]);
        AttChar::create([
            'att_id' => 4,
            'char_id' => 12,
        ]);
        AttChar::create([
            'att_id' => 5,
            'char_id' => 13,
        ]);
        AttChar::create([
            'att_id' => 5,
            'char_id' => 14,
        ]);
        AttChar::create([
            'att_id' => 5,
            'char_id' => 15,
        ]);
        // for ($i = 0; $i < 10; $i++) {
        //     Attribute::create([
        //         'category_id' => rand(1, 3),
        //         'name' => 'Attribute ' . $i,
        //     ]);
        // }

        // for ($i = 0; $i < 10; $i++) {
        //     Characteristic::create([
        //         'name' => 'Characteristic ' . $i,
        //     ]);
        // }

        // for ($i = 0; $i < 100; $i++) {
        //     AttChar::create([
        //         'att_id' => rand(1, 10),
        //         'char_id' => rand(1, 10),
        //     ]);
        // }

        for ($i = 0; $i < 10; $i++) {
            Product::create([
                'category_id' => rand(1, 6),
                'name' => 'Product ' . $i,
                'description' => 'Description ' . $i,
            ]);
        }

        // for ($i = 0; $i < 20; $i++) {
        //     Element::create([
        //         'product_id' => rand(1, 10),
        //         'title' => 'Element ' . $i,
        //         'price' => rand(1000, 10000000),
        //         'quantity' => rand(1, 100),
        //     ]);
        // }

        // for ($i = 0; $i < 200; $i++) {
        //     Option::create([
        //         'element_id' => rand(1, 20),
        //         'att_char_id' => rand(1, 100),
        //     ]);
        // }
    }
}
