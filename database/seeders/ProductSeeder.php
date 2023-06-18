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
        $products = [
            [
                'name' => 'Jago Python',
                'category' => 'Teknik Informatika',
                'price' => 90000
            ],
            [
                'name' => 'Jago Photoshop',
                'category' => 'Seni',
                'price' => 110000
            ],
            [
                'name' => 'Jago Matlab',
                'category' => 'Teknik Elektro',
                'price' => 95000
            ],
            [
                'name' => 'Jago Excel',
                'category' => 'Manajemen',
                'price' => 80000
            ],
            [
                'name' => 'Jago Sketchup',
                'category' => 'Arsitektur',
                'price' => 120000
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
