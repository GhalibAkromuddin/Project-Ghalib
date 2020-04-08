<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        $data['mapel'] = \App\Mapel::all();
        $data['judul']  = "Data Mata Pelajaran";
        return view('admin.mapel_index', $data);
    }
}
