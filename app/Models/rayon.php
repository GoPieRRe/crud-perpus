<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rayon extends Model
{
    use HasFactory;
    public $table = 'rayon';

    protected $fillable = ['rayon', 'pembimbing', 'no_hp'];
}