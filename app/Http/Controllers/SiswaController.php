<?php

namespace App\Http\Controllers;

use App\Siswa;
use DB;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data['siswa'] = \App\Siswa::all();
        $data['judul']  = "Data Siswa";
        return view('admin.siswa_index', $data);
    }
    public function tambah()
    {
        $data['siswa']     = new \App\Siswa();
        $data['action']     = 'SiswaController@simpan';
        $data['btn_submit'] = 'SIMPAN';
        $data['method']     = "POST";
        return view('siswa_tambah', $data);
    }
    public function regis(Request $request)
    {
        $this->validate(
            $request,
            [
                'nama' => 'required',
                'email' => 'required',
                'no_handphone' => 'required'
            ]
        );
        Siswa::table('tb_test')->insert(['nama' => $request->nama, 'email' => $request->email, 'no_handphone' => $request->no_handphone]);
    }
}
