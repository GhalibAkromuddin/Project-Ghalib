<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $data['jadwal'] = \App\Jadwal::all();
        $data['judul']  = "Data Jadwal Pelajaran";
        return view('admin.jadwal_index', $data);
    }
}
