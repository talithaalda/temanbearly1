<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::create([
            'namakategori'=>'Skincare',
            'slug'=>'skincare',
            'image'=>'category-image/GqYhFubGppQYEVfEDJCcU6bt3A6fTsUWhATD9tUH.jpg',
        ]);
        category::create([
            'namakategori'=>'MakeUp',
            'slug'=>'makeup',
            'image'=>'category-image/ylBYW5W8zgchrh8ALnDUPNLIul00hd9WtC7yBvyj.jpg',
        ]);
        category::create([
            'namakategori'=>'Parfume',
            'slug'=>'parfume',
            'image'=>'category-image/Gu7tlyBkALYNJQW0nd7bhBRoxLhJTKa0mJhVFN4E.jpg',
        ]);
        category::create([
            'namakategori'=>'Aksesoris',
            'slug'=>'aksesoris',
            'image'=>'category-image/W520rPwm784T2xc2p1UrDTGV82xoswYkh1MmqgK5.jpg',
        ]);
    }
}
