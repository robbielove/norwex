<?php

namespace Database\Seeders;

use CustomerTableSeeder;
use Database\Factories\CustomerStatusFactory;
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
        $this->call([
            CustomerStatusSeeder::class,
            CustomerSeeder::class,
            OrderSeeder::class
        ]);

        $this->command->info('Customer table seeded!');
    }
}
