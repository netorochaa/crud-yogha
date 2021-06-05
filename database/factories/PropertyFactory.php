<?php

namespace Database\Factories;

use App\Models\Property;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    protected $model = Property::class;

    public function definition()
    {
        return [
            'name'      => $this->faker->sentence(), 
            'city'      => $this->faker->city(), 
            'occupant'  => $this->faker->numberBetween(1, 99), 
            'bedroom'   => $this->faker->numberBetween(1, 10), 
            'restroom'  => $this->faker->numberBetween(1, 10), 
            'internet'  => $this->faker->numberBetween(0, 1), 
            'pool'      => $this->faker->numberBetween(0, 1), 
            'type_id'   => function() {
                return Type::factory()->create();
            },
        ];
    }
}
