<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $data['jurusan'] = \App\Jurusan::all();
        $data['judul']  = "Data Jurusan";
        return view('admin.jurusan_index', $data);
    }
}
