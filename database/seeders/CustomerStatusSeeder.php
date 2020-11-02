<?php

namespace Database\Seeders;

use App\Models\CustomerStatus;
use Illuminate\Database\Seeder;

class CustomerStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomerStatus::factory()->create([
                'Name' => 'Active',
                'Code' => 'AC'
            ]);
        CustomerStatus::factory()->create([
                'Name' => 'Removed',
                'Code' => 'RE'
            ]);
    }
}
