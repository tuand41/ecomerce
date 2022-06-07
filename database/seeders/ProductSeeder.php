<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([            
            [
                'name' => 'produc1',
                'description' => 'mo ta',
                'image' => '/images/sp1.jpg',
                'price' => 10000,
                'qty' => 2,
                'slug' => Str::slug('product1') ,
                'category_id' => 1,
            ],
            [
                'name' => 'produc2',
                'description' => 'mo ta',
                'image' => '/images/sp2.jpg',
                'price' => 10000,
                'qty' => 2,
                'slug' => Str::slug('product2') ,
                'category_id' => 1, 
            ],
            [
                'name' => 'produc3',
                'description' => 'mo ta',
                'image' => '/images/sp3.jpg',
                'price' => 10000,
                'qty' => 2,
                'slug' => Str::slug('product3') ,
                'category_id' => 1,
            ],
            [
                'name' => 'produc4',
                'description' => 'mo ta',
                'image' => '/images/sp4.jpg',
                'price' => 10000,
                'qty' => 2,
                'slug' => Str::slug('product4') ,
                'category_id' => 3,
            ],
            [
                'name' => 'produc5',
                'description' => 'mo ta',
                'image' => '/images/sp5.jpg',
                'price' => 10000,
                'qty' => 2,
                'slug' => Str::slug('product5') ,
                'category_id' => 2,   
            ],    
                
        ]);
    }
}
