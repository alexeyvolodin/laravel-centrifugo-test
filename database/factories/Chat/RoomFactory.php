<?php

namespace Database\Factories\Chat;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'uuid'    => $this->faker->uuid()
        ];
    }
}
