<?php

namespace Database\Seeders;

use App\Models\Photo;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $datas =[
        //     [
        //         'product_id' => 1,
        //         'path'       => 'img/iphone_13_add_1.jpg',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'product_id' => 2,
        //         'path'       => 'img/iphone_16_add_1.png',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'product_id' => 2,
        //         'path'       => 'img/iphone_16_add_2.png',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'product_id' => 2,
        //         'path'       => 'img/iphone_16_add_3.png',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'product_id' => 2,
        //         'path'       => 'img/iphone_16_add_4.png',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'product_id' => 4,
        //         'path'       => 'img/iphone_16_plus_add_1.png',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'product_id' => 5,
        //         'path'       => 'img/iphone_16_pro_main.png',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'product_id' => 6,
        //         'path'       => 'img/iphone_16_pro_max_add_1.png',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'product_id' => 6,
        //         'path'       => 'img/iphone_16_pro_max_add_2.png',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'product_id' => 6,
        //         'path'       => 'img/iphone_16_pro_max_add_3.png',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'product_id' => 6,
        //         'path'       => 'img/iphone_16_pro_max_add_3.png',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ];

        // foreach ($datas as $data) {
        //     Photo::create($data);
        // }

        $products = Product::get();

        foreach($products as $pd)
        {
            for($i = 0; $i <=5; $i++)
            {
                Photo::create([
                    'product_id' => $pd->id,
                    'path'       => 'img/default.jpg',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}