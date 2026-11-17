<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Laptop;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Laptop::create([
            'brand' => 'Asus',
            'model' => 'VivoBook 15',
            'processor' => 'Intel Core i15',
            'ram' => 512,
        ]);
    }
}
