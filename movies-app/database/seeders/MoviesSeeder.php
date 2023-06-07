<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
                'no' => 1,
                'judul' => 'Parasite',
                'poster' => 'image.png',
                'genre' => 'Drama',
                'negara' => 'Korea Selatan',
                'tahun' => 2019,
                'rating' => 8.6,
        ]);
        Movie::create([           
                'no' => 2,
                'judul' => 'The God Father',
                'poster' => 'image.png',
                'genre' => 'Crime',
                'negara' => 'USA',
                'tahun' => 1972,
                'rating' => 80,
        
        ]);
        Movie::create([
                'no' => 3,
                'judul' => 'The Dark Knight',
                'poster' => 'image.png',
                'genre' => 'Action',
                'negara' => 'USA',
                'tahun' => 2008,
                'rating' => 9.0,
            
        ]);
        Movie::create([ 
                'no' => 4,
                'judul' => 'Jujutsu Kaisen  0',
                'poster' => 'image.png',
                'genre' => 'Anime, Shounen',
                'negara' => 'Japan',
                'tahun' => 2021,
                'rating' => 9.8,

           
        ]);
        Movie::create([   
            'no' => 5,
            'judul' => 'One Piece Film: Red',
            'poster' => 'image.png',
            'genre' => 'Anime, Shounen, Komedi',
            'negara' => 'Japan',
            'tahun' => 2022,
            'rating' => 9.4,

        ]);
    }
}
