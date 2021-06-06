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
            'name'      => $this->faker->text($maxNbChars = 50), 
            'city'      => $this->faker->city(), 
            'occupant'  => $this->faker->numberBetween(1, 99), 
            'bedroom'   => $this->faker->numberBetween(1, 10), 
            'restroom'  => $this->faker->numberBetween(1, 10), 
            'internet'  => $this->faker->boolean() ? 'on' : null, 
            'pool'      => $this->faker->boolean() ? 'on' : null, 
            'type_id'   => function() {
                return Type::factory()->create();
            },
        ];
    }
}
