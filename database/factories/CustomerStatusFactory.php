<?php

namespace Database\Factories;

use App\Models\CustomerStatus;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CustomerStatusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerStatus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Name' => $this->faker->randomElement(['Active', 'Removed']),
            'Code' => function (array $data) {
                return Str::upper(Str::limit($data['Name'], '2'));
            }
        ];
//        dd($this);
    }
}
