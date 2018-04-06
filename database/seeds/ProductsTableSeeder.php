<?php

use Illuminate\Database\Seeder;
use  App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Laptop 1',
            'slug' => 'laptop-1',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 123333,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vitae nisi, consequuntur illum dolores cumque pariatur quis provident deleniti nesciunt officia est reprehenderit sunt aliquid possimus temporibus enim eum hic.'
        ]);
        Product::create([
            'name' => 'Laptop 2',
            'slug' => 'laptop-2',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 123333,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vitae nisi, consequuntur illum dolores cumque pariatur quis provident deleniti nesciunt officia est reprehenderit sunt aliquid possimus temporibus enim eum hic.'
        ]);
        Product::create([
            'name' => 'Laptop 3',
            'slug' => 'laptop-3',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 123333,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vitae nisi, consequuntur illum dolores cumque pariatur quis provident deleniti nesciunt officia est reprehenderit sunt aliquid possimus temporibus enim eum hic.'
        ]);
        Product::create([
            'name' => 'Laptop 4',
            'slug' => 'laptop-4',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 123333,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vitae nisi, consequuntur illum dolores cumque pariatur quis provident deleniti nesciunt officia est reprehenderit sunt aliquid possimus temporibus enim eum hic.'
        ]);
        Product::create([
            'name' => 'Laptop 9',
            'slug' => 'laptop-9',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 123333,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vitae nisi, consequuntur illum dolores cumque pariatur quis provident deleniti nesciunt officia est reprehenderit sunt aliquid possimus temporibus enim eum hic.'
        ]);
    }
}
