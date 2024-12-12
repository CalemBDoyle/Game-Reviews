<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Developer;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Developer::insert([
            ['name' => 'Nintendo', 'image' => 'nintendo.jpg', 'bio' => 'Developer of Mario games'],
            ['name' => 'Hakita', 'image' => 'Hakita.jpg', 'bio' => 'Developer of Ultrakill'],
            ['name' => 'Square Enix', 'image' => 'square.jpg', 'bio' => 'Developer of Final Fantasy games'],
            ['name' => 'Pitr', 'image' => 'pitr.jpg', 'bio' => 'Programmer of Ultrakill'],
            ['name' => 'Greylock Games Studio', 'image' => 'greylock.jpg', 'bio' => 'Developer of Echo Point']
        ]);
    }
}
