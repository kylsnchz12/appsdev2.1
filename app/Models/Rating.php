<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'rating';

    public $timestamps = false;
    
    public function movie() {
        return $this->belongsTo(Movie::class, 'mov_id');
    }

    public function reviewer() {
        return $this->belongsTo(Reviewer::class, 'rev_id');
    }
}
