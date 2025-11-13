<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';
    public $timestamps = false; // ❌ Nonaktifkan created_at & updated_at

    protected $fillable = [
        'title',
        'genre',
        'duration',
        'release_year',
        'price',
    ];
}
