<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieDirection extends Model
{
    protected $table = 'movie_direction';

    public $timestamps = false;

    public function directors()
    {
        return $this->belongsToMany(Director::class, 'movie_direction', 'mov_id', 'dir_id');
    }

}
