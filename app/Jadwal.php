<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'tb_jadwal';
    protected $fillable = ['hari', 'jam', 'kode_kelas', 'kode_matpel'];
}
