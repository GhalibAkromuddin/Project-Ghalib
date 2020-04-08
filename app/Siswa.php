<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'tb_siswa';
    protected $fillable = ['nisn', 'nama_siswa', 'alamat', 'jk_siswa', 'tempat_lahir', 'tgl_lahir', 'agama', 'email', 'password', 'avatar', 'kode_kelas', 'kode_jurusan'];
}
