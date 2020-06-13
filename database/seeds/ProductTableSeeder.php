<?php
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          //
          DB::statement('SET FOREIGN_KEY_CHECKS=0');
          DB::table('products')->truncate();
          //generate 10 new posts
          $products = [];
          $facker = Factory::create();
          for($i=1; $i<=15; $i++){
              $products[] = [
                  'title' => $facker->sentence(rand(1, 3)),
                  'description' => $facker->paragraph(rand(6, 10), true),                  
                  'images_url' => '["sample-1.jpg","sample-2.jpg","sample-3.jpg"]',
                  'is_featured' => rand(0, 1),
                  'category_id' => rand(1, 5),
                  'rating' => rand(0, 5),
                  'price' => rand(15,100)
              ];
          }
          DB::table('products')->insert($products);
    }
}
