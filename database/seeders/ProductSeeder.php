<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'testing produk sibok',
            'price' => 19000,
            'quantity' => 100,
            'category_id' => 1,
            'brand_id' =>1,
            'description'=>'produk 1 untuk sibok ini merupakan deskripsi dari sebuah produk 1'

        ]);
    }
}