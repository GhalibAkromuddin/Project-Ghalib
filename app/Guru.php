<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'tb_guru';
    protected $fillable = [
        'nip', 'nama_guru', 'alamat_guru', 'jk_guru', 'tempat_lahir', 'tgl_lahir', 'pend_terakhir', 'jurusan', 'agama', 'email', 'status', 'jabatan', 'password'
    ];
}
