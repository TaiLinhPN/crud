<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        Food::factory()->create([
            'name' => 'Test User',
            'price' => '2000000',
            'img' => 'https://images.foody.vn/res/g100/998991/prof/s576x330/foody-upload-api-foody-mobile-11fba6ad9fc6a112928c-200115170746.jpg',
            'sub' => 'sub ',
            'category' => 'Test User',
        ]);
        $this ->call(Food::class);
    }
}
