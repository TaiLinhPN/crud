<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Food extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 30) as $index) {
         Food::create([
         'name' => $faker->sentence(5),
         'price' => $faker->sentence(6),
         'img' => $faker->paragraph(6),
         'sub' => $faker->paragraph(6),
         'category' => $faker->paragraph(6),
    ]);
}
    }
}
