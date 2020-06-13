<?php

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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'name' => 'Category 1',
                'image_url' => 'category_img.png'
            ],
            [
                'name' => 'Category 2',
                'image_url' => 'category_img.png'
            ],
            [
                'name' => 'Category 3',
                'image_url' => 'category_img.png'
            ],
            [
                'name' => 'Category 4',
                'image_url' => 'category_img.png'
            ],
            [
                'name' => 'Category 4',
                'image_url' => 'category_img.png'
            ]
        ]);
    }
}
