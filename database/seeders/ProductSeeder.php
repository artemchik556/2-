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
    public function run()
{
    Product::insert([
        ["название" => "Оранжевый", "стоимость" => 50000000, "количество" => 27],
        ["название" => "Банан", "стоимость" => 120000000, "количество" => 17],
        ["название" => "Хлеб", "стоимость" => 70000000, "количество" => 0],
    ]);
}
}
