<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Seed a few songs
        Song::create([
            'artist' => 'Eminem',
            'title' => 'Stan',
            'album' => 'best album',
            'duration' => '3:30'
        ]);

        Song::create([
            'artist' => 'A P Dhillon',
            'title' => 'With You',
            'album' => 'worst album',
            'duration' => '3:34'
        ]);
        Song::create([
            'artist' => 'Honey Singh',
            'title' => 'Love Dose',
            'album' => 'Desi Kalakar',
            'duration' => '3:50'
        ]);
        Song::create([
            'artist' => 'Arijit Singh',
            'title' => 'Chaleya',
            'album' => 'Jawan',
            'duration' => '3:40'
        ]);

    }
}
