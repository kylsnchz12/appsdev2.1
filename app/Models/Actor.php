<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'actor';
    
    public $timestamps = false;

    protected $primaryKey = 'act_id';
    protected $guarded = ['act_id'];
    protected $fillable = ['act_fname', 'act_lname', 'act_gender'];

    public function movies() {
        return $this->hasMany(MovieCast::class, 'movie_cast', 'mov_id');
    }

}
