<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['name' => 'Apple'],
            ['name' => 'Samsung'],
            ['name' => 'Huawei'],
            ['name' => 'Xiaomi'],
            ['name' => 'OPPO'],
            ['name' => 'VIVO'],
            ['name' => 'HONOR'],
            ['name' => 'Realme'],
            ['name' => 'Itel'],
            ['name' => 'Tecno'],
            ['name' => 'Infinix'],
            ['name' => 'ZTE'],
            ['name' => 'Meizu'],
        ];
        
        foreach($brands as $brand) {
            Brand::create([
                'name' => $brand['name'],
            ]);
        }

    }
}
