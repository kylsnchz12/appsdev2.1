<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviewer extends Model
{
    protected $table = 'reviewer';

    public $timestamps = false;

    protected $primaryKey = 'rev_id';
}
