<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    protected $table = 'genres';

    public $timestamps = false;

    protected $primaryKey = 'gen_id';
    
    public function movies() {
        return $this->belongsToMany(Movie::class, 'movie_genres');
    }
}
