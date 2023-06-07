<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
                'no' => 1,
                'film' => 'Parasite',
                'user' => 'Fauzan',
                'rating' => 9.0,
                'review' => 'Salah satu film yang paling menggugah pikiran.',
            
        ]);
        Review::create([
                'no' => 2,
                'film' => 'The God Father',
                'user' => 'nabil',
                'rating' => 9.5,
                'review' => 'seru bngt',
            
        ]);
        Review::create([
                'no' => 3,
                'film' => 'The Dark Knight',
                'user' => 'Rega',
                'rating' => 9.0,
                'review' => 'Aku suka Batman',
            
            
        ]);
        Review::create([
                'no' => 4,
                'film' => 'Jujutsu Kaisen  0',
                'user' => 'Sumbul',
                'rating' => 9.1,
                'review' => 'Yuta kece parah',
           
        ]);
        Review::create([
                'no' => 5,
                'film' => 'One Piece Film: Red',
                'user' => 'Luffy',
                'rating' => 9.3,
                'review' => 'Sangat keren karenan ini film saya sendiri XD :v',
            
        ]);

    }
}
