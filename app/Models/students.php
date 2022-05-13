<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    

    public $tabel = 'students';
    protected $fillable = ['nis' ,'nama','rombel','rayon','jk'];
}
