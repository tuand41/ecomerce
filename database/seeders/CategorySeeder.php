<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Iphone',
                'slug' => 'iphone',
            ],
            [
                'name' => 'Sam Sung',
                'slug' => 'sam-sung',
            ],
            [
                'name' => 'Xiao Mi',
                'slug' => 'xiao-mi',
            ],
            [
                'name' => 'Oppo',
                'slug' => 'oppo',
            ],
        ]);
    }
}
