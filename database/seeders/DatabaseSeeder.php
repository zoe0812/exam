<?php

namespace Database\Seeders;

use App\Models\product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        product::create([
            "p_name"=>"apple",
            "p_mass"=>"100",
            "p_price"=>"1.50"
        ]);

        product::create([
            "p_name"=>"orange",
            "p_mass"=>"100",
            "p_price"=>"2.00"
        ]);

        product::create([
            "p_name"=>"banana",
            "p_mass"=>"100",
            "p_price"=>"3.50"
        ]);

        product::create([
            "p_name"=>"grape",
            "p_mass"=>"100",
            "p_price"=>"4.50"
        ]);

        product::create([
            "p_name"=>"watermelon",
            "p_mass"=>"100",
            "p_price"=>"5.50"
        ]);
    }
}
