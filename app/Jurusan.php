<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'tb_jurusan';
    protected $fillable = ['kode_jurusan', 'nama_jurusan'];
}
