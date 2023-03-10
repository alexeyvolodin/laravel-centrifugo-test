<?php

namespace Database\Seeders;

use App\Models\Chat\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    public function run()
    {
        Room::factory(4)->create();
    }
}
