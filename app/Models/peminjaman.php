<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;
    public $table = 'peminjaman';
    protected $fillable = ['nama', 'judul',	'tgl_pinjam', 'tgl_kembali', 'petugas','nis', 'rombel', 'rayon'	,'jk','status'];

}
