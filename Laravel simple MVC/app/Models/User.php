<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $users = [
        [
            'no' => 1,
            'nama' => 'Nabil Muqodam',
            'username' => 'nabil',
            'password' => 1111111,
            'email' => 'nabilqodam@gmail.com',
            'role' => 'INA',
        ],
        [
            'no' => 2,
            'nama' => 'Muhamad Fauzan',
            'username' => 'fauzan',
            'password' => 11111112,
            'email' => 'muhafauzan@gmail.com',
            'role' => 'INA',
        ],
        [
            'no' => 3,
            'nama' => 'Muhamad Rega',
            'username' => 'Rega',
            'password' => 87654321,
            'email' => 'rega12@gmail.com',
            'role' => 'INA',
        ],
        [
            'no' => 4,
            'nama' => 'Muhammad Sumbul',
            'username' => 'Sumbul',
            'password' => 87654321,
            'email' => 'muhammadsumbul@gmail.com',
            'role' => 'INA',
        ],
        [
            'no' => 5,
            'nama' => 'Monkey D Luffy',
            'username' => 'Luffy',
            'password' => 4556789,
            'email' => 'pirateking@gmail.com',
            'role' => 'JPN',
        ],
    ];

    public function getAllUsers()
    {
        return $this->users;
    }
}
