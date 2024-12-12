<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\Developer;
use Illuminate\Support\Carbon;
class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    function run(): void
    {
        $currentTimestamp = Carbon::now();
        $games =[
            ['title' => 'Mario And Luigi Brothership', 'genre' => 'rpg', 'description' => 'Mario & Luigi: Brothership is an upcoming role-playing game', 'year' => 2024, 'image' => 'marioandluigi_brothership.jpg', 'link' => 'https://www.smythstoys.com/ie/en-ie/gaming-and-tech/nintendo-gaming/nintendo-switch/nintendo-switch-games/mario-and-luigi-brothership-nintendo-switch/p/241312?gad_source=1&gclid=Cj0KCQiAsOq6BhDuARIsAGQ4-zjEYtj3tqPuEAkTckUHMfReg6wRS2naQqwGYCNanSMaRrgq3eJpuYEaArH_EALw_wcB', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['title' => 'Ultrakill', 'genre' => 'fps', 'description' => 'ULTRAKILL is a fast-paced ultraviolent retro FPS', 'year' => 2020, 'image' => 'ultrakill.jpg', 'link' => 'https://store.steampowered.com/app/1229490/ULTRAKILL/', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp], 
            ['title' => 'Echo Point Nova', 'genre' => 'fps', 'description' => 'Echo Point Nova is an open-world FPS that offers unparalleled freedom', 'year' => 2024, 'image' => 'echo.jpg', 'link' => 'https://store.steampowered.com/app/1836730/Echo_Point_Nova/', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp], 
            ['title' => 'Super Mario Galaxy', 'genre' => 'platformer', 'description' => 'Super Mario Galaxy is a 3D action-adventure platform game for the Wii', 'year' => 2007, 'image' => 'galaxy.jpg', 'link' => 'https://ie.webuy.com/product-detail?id=045496900434&gad_source=1&gclid=Cj0KCQiAsOq6BhDuARIsAGQ4-zh5LIYWNlNgzttDXCALaB0pU2LCcXb_VKF1GzG5oVLnPxl61UNRg6MaAn26EALw_wcB', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp], 
            ['title' => 'Final Fantasy VII Remake', 'genre' => 'rpg', 'description' => 'Final Fantasy VII Remake is a 2020 action role-playing game', 'year' => 2020, 'image' => 'ffvii.jpg', 'link' => 'https://store.steampowered.com/app/1462040/FINAL_FANTASY_VII_REMAKE_INTERGRADE/', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
        ];

        foreach ($games as $gameData) 
        {
            // Insert the game into the game table
            $game = Game::create(array_merge($gameData, ['created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp]));

            // Randomly select two developers
            // Note: developers must exist in the developers table
            // So DeveloperSeeder must be executed before GameSeeder
            $developers = Developer::inRandomOrder()->take(2)->pluck('id');

            // Attach developers to games
            // Laravel's attach() function inserts a row in the pivot table indicating that this game is developed by these developers
            // You need to have the relationships and pivot table set up correctly for this to work
            $game->developers()->attach($developers);
        }

}
}
