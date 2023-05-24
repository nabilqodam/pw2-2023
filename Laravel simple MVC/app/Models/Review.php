<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'no' => 1,
            'film' => 'Parasite',
            'user' => 'Fauzan',
            'rating' => 9.0,
            'review' => 'Salah satu film yang paling menggugah pikiran.',
        ],
        [
            'no' => 2,
            'film' => 'The God Father',
            'user' => 'nabil',
            'rating' => 9.5,
            'review' => 'seru bngt',
        ],
        [
            'no' => 3,
            'film' => 'The Dark Knight',
            'user' => 'Rega',
            'rating' => 9.0,
            'review' => 'Aku suka Batman',
        ],
        [
            'no' => 4,
            'film' => 'Jujutsu Kaisen  0',
            'user' => 'Sumbul',
            'rating' => 9.1,
            'review' => 'Yuta kece parah',
        ],
        [
            'no' => 5,
            'film' => 'One Piece Film: Red',
            'user' => 'Luffy',
            'rating' => 9.3,
            'review' => 'Sangat keren karenan ini film saya sendiri XD :v',
        ],
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }
}
