<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $data['guru'] = \App\Guru::all();
        $data['judul']  = "Data Guru";
        return view('admin.guru_index', $data);
    }
}
