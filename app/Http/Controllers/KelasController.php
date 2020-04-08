<?php

namespace App\Http\Controllers;


use App\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $data['kelas'] = \App\Kelas::all();
        $data['judul']  = "Data Kelas";
        return view('admin.kelas_index', $data);
    }
    public function simpan(Request $request)
    {
        $validasi = $this->validate($request, [
            'kode_kelas' => 'required|:kelas',
            'nama_kelas' => 'required',
            'tahun_ajaran' => 'required |numeric:kelas',
            'semester' => 'required',
        ]);

        $kelas = new Kelas;
        $kelas->kode_kelas = $request->input('kode_kelas');
        $kelas->nama_kelas = $request->input('nama_kelas');
        $kelas->tahun_ajaran = $request->input('tahun_ajaran');
        $kelas->semester = $request->input('semester');
        $kelas->save();

        return response()->json($kelas);
        \App\Kelas::insert($request->all());
        return redirect()->back()->with('pesan', 'Data sudah disimpan!');
    }
}
