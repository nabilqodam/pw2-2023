<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'no' => 1,
            'nama' => 'Drama',
        ],
        [
            'no' => 2,
            'nama' => 'Crime',
        ],
        [
            'no' => 3,
            'nama' => 'Action',
        ],
        [
            'no' => 4,
            'nama' => 'Shounen',
        ],
        [
            'no' => 5,
            'nama' => 'Shounen, Komedi',
        ],
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}

