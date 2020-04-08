<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'tb_matpel';
    protected $fillable = ['kode_matpel', 'nama_matpel'];
}
