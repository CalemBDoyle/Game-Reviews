<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;
use Carbon\Carbon;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();
        Game::insert([
            ['title' => 'Mario And Luigi Brothership', 'genre' => 'rpg', 'description' => 'Mario & Luigi: Brothership is an upcoming role-playing game', 'year' => 2024, 'image' => 'marioandluigi_brothership.jpg', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['title' => 'Ultrakill', 'genre' => 'fps', 'description' => 'ULTRAKILL is a fast-paced ultraviolent retro FPS', 'year' => 2020, 'image' => 'ultrakill.jpg', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp], 
            ['title' => 'Echo Point Nova', 'genre' => 'fps', 'description' => 'Echo Point Nova is an open-world FPS that offers unparalleled freedom', 'year' => 2024, 'image' => 'echo.jpg', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp], 
            ['title' => 'Super Mario Galaxy', 'genre' => 'platformer', 'description' => 'Super Mario Galaxy is a 3D action-adventure platform game for the Wii', 'year' => 2007, 'image' => 'galaxy.jpg', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp], 
            ['title' => 'Final Fantasy VII Remake', 'genre' => 'rpg', 'description' => 'Final Fantasy VII Remake is a 2020 action role-playing game', 'year' => 2020, 'image' => 'ffvii.jpg', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
        ]);
}
}
