<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'tb_kelas';
    protected $fillable = ['kode_kelas', 'nama_kelas', 'tahun_ajaran', 'semester'];
}
