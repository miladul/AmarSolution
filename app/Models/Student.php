<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory, HasApiTokens;

    protected $guarded = [];


    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'dob' => 'date',
    ];
}
